<?php

namespace Botble\Comment\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Botble\Comment\Http\Requests\StoreVote;
use Botble\Comment\Contracts\CommentRepository;

class VoteController extends Controller
{
    /**
     * @var \Botble\Comment\Contracts\CommentRepository
     */
    protected $comments;

    /**
     * Create a new controller instance.
     *
     * @param \Botble\Comment\Contracts\CommentRepository $comments
     * @return void
     */
    public function __construct(CommentRepository $comments)
    {
        $this->middleware('auth');
        $this->comments = $comments;
    }

    /**
     * Upvote the given comment.
     *
     * @param  \Botble\Comment\Http\Requests\StoreVote $request
     * @param  int $commentId
     * @return \Illuminate\Http\Response
     */
    public function upvote(StoreVote $request, $commentId)
    {
        $this->comments->upvote($commentId, $request->user()->getKey());

        return response()->json(null, 204);
    }

    /**
     * Downvote the given comment.
     *
     * @param  \Botble\Comment\Http\Requests\StoreVote $request
     * @param  int $commentId
     * @return \Illuminate\Http\Response
     */
    public function downvote(StoreVote $request, $commentId)
    {
        $this->comments->downvote($commentId, $request->user()->getKey());

        return response()->json(null, 204);
    }

    /**
     * Remove the vote for the given comment.
     *
     * @param  \Botble\Comment\Http\Requests\StoreVote $request
     * @param  int $commentId
     * @return \Illuminate\Http\Response
     */
    public function remove(StoreVote $request, $commentId)
    {
        $this->comments->removeVote($commentId, $request->user()->getKey());

        return response()->json(null, 204);
    }
}
