<?php

namespace Botble\Comment\Http\Controllers;

use Illuminate\Http\Request;
use Botble\Comment\Comment;
use Illuminate\Routing\Controller;
use Botble\Comment\ThrottlesPosts;
use Botble\Comment\ScriptVariables;
use Botble\Comment\Contracts\Formatter;
use Botble\Comment\Events\CommentWasPosted;
use Botble\Comment\Http\Requests\BulkUpdate;
use Botble\Comment\Http\Requests\StoreComment;
use Botble\Comment\Http\Requests\UpdateComment;
use Botble\Comment\Contracts\CommentRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CommentController extends Controller
{
    use ThrottlesPosts,
        AuthorizesRequests;

    /**
     * @var \Botble\Comment\Contracts\CommentRepository
     */
    protected $comments;

    /**
     * @var \Botble\Comment\Contracts\Formatter
     */
    protected $formatter;

    /**
     * Create a new controller instance.
     *
     * @param  \Botble\Comment\Contracts\CommentRepository $comments
     * @param  \Botble\Comment\Contracts\Formatter $formatter
     * @return void
     */
    public function __construct(CommentRepository $comments, Formatter $formatter)
    {
        $this->comments = $comments;
        $this->formatter = $formatter;

        $this->middleware('api', ['only' => ['update', 'destroy', 'bulkUpdate']]);
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        if ($id = $request->id) {
            return $this->comments->findOrFail($id);
        }

        $pageId = $request->page_id;
        $commentableId = $request->commentable_id;
        $commentableType = $request->commentable_type;
        $canModerate = $request->user() && $request->user()->can('moderate', Comment::class);

        if (! ($commentableId || $commentableType) && ! $pageId && ! $canModerate) {
            return response()->json('The page_id or commentable_id and commentable_type are missing.', 400);
        }

        $args = $request->only('commentable_id', 'commentable_type', 'page_id', 'page', 'order', 'target');

        if ($request->user()) {
            $args['user_id'] = $request->user()->getKey();
        } elseif ($email = $request->cookie('comment_author_email')) {
            $args['email'] = $email;
        }

        if (! $canModerate) {
            $args['hide_user_details'] = true;
        }

        $comments = $this->comments->get($args)->toArray();

        if (($request->ajax() && ! $request->pjax()) || $request->wantsJson()) {
            return $comments;
        }

        ScriptVariables::add('data.comments', $comments);

        return view('plugins/comment::comments');
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreComment $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function store(StoreComment $request)
    {
        $throttle = $this->shouldThrottlePosts($request);

        if ($throttle && $this->hasTooManyPostAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $comment = $this->comments->create(
            $this->getStoreInput($request)
        );

        if ($throttle) {
            $this->incrementPostAttempts($request);
        }

        event(new CommentWasPosted($comment));

        if ($request->user()) {
            return response()->json($comment, 201);
        }

        return response()->json($comment, 201)->withCookie(
            cookie()->forever('comment_author_email', $comment->author_email)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Botble\Comment\Http\Requests\UpdateComment $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComment $request, $id)
    {
//        $comment = $this->comments->findOrFail($id);
//
//        $this->authorize('update', $comment);
//
//        if ($request->user()->can('moderate', Comment::class)) {
//            $input = array_filter($request->only('content', 'status', 'author_name', 'author_email', 'author_url'));
//        } else {
//            $input = $request->only('content');
//        }
        $input = array_filter($request->only('content', 'status', 'author_name', 'author_email', 'author_url'));

        return $this->comments->update($id, $input);
    }

    /**
     * Remove the specified resource from storage.
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Request $request, $id)
    {
        $comment = $this->comments->findOrFail($id);

        $this->authorize('delete', $comment);

        $comment->delete($id);

        return response()->json(null, 204);
    }

    /**
     * Report the specified comment.
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function report(Request $request, $id)
    {
        $comment = $this->comments->findOrFail($id);

        $this->authorize('report', $comment);

        $this->comments->report($comment, $request->user()->getKey());

        return response()->json(null, 204);
    }

    /**
     * Update the specified resource in storage.
     * @param BulkUpdate $request
     * @return array
     */
    public function bulkUpdate(BulkUpdate $request)
    {
       // $this->authorize('moderate', Comment::class);

        $ids = (array) $request->ids;

        if ($request->status === 'delete') {
            return ['deleted' => $this->comments->deleteByIds($ids)];
        }

        return [
            'updated' => $this->comments->updateStatusByIds($ids, $request->status)
        ];
    }

    /**
     * Render the comment as HTML.
     * @param Request $request
     * @return string
     */
    public function preview(Request $request)
    {
        $xml = $this->formatter->parse($request->content);

        return $this->formatter->render($xml);
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    protected function getStoreInput(Request $request)
    {
        $input = array_merge(
            $request->only(
                'page_id', 'commentable_id', 'commentable_type',
                'root_id', 'parent_id', 'content', 'author_name',
                'author_email', 'author_url', 'permalink', 'referrer'
            ),
            [
                'author_ip' => $request->server('REMOTE_ADDR'),
                'user_agent' => $request->server('HTTP_USER_AGENT'),
            ]
        );

        if (! config('comments.allow_replies')) {
            unset($input['root_id'], $input['parent_id']);
        }

        if ($user = $request->user()) {
            $input['user_id'] = $user->getKey();
            unset($input['author_name'], $input['author_email'], $input['author_url']);
        }

        return $input;
    }
}
