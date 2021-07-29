<?php

namespace Botble\Comment\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Botble\Comment\Comment;
use Illuminate\Routing\Controller;
use Botble\Comment\SettingInput;
use Botble\Comment\ScriptVariables;
use Botble\Comment\Facades\Formatter;
use Botble\Comment\Contracts\Settings;
use Illuminate\Auth\Middleware\Authorize;
use Botble\Comment\Contracts\CommentRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Assets;

class AdminController extends Controller
{
    use AuthorizesRequests;

    /**
     * @var \Botble\Comment\Contracts\Settings
     */
    protected $settings;

    /**
     * @var \Botble\Comment\Contracts\CommentRepository
     */
    protected $comments;

    /**
     * Create a new controller instance.
     *
     * @param \Botble\Comment\Contracts\CommentRepository $comments
     * @param \Botble\Comment\Contracts\Settings $settings
     * @return void
     */
    public function __construct(CommentRepository $comments, Settings $settings)
    {
        $this->settings = $settings;
        $this->comments = $comments;
//        if (class_exists(Authorize::class)) {
//            $this->middleware('can:moderate-comments');
//        } else {
//            $this->authorize('moderate', Comment::class);
//        }

        $this->setJavaScriptTranslations();
    }

    /**
     * Show the dashboard page.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(Request $request)
    {
        page_title()->setTitle(trans('plugins/comment::comment.name'));

        Assets::addStylesDirectly('vendor/core/plugins/comment/css/admin.css')
            ->addScriptsDirectly('vendor/core/plugins/comment/js/admin.js');

        if (config('comments.emoji')) {
            Assets::addScripts('twemoji');
        }

        $args = [
            'page' => (int)$request->get('page', 1),
            'status' => $request->get('status', 'all'),
            'page_id' => $request->get('page_id'),
            'commentable_id' => $request->get('commentable_id'),
            'commentable_type' => $request->get('commentable_type'),
            'per_page' => $request->get('per_page'),
            'order' => $request->get('order', 'latest')
        ];

        $comments = $this->comments->getForAdmin($args)->toArray();

        if ($request->wantsJson()) {
            return $comments;
        }

        ScriptVariables::add('data.args', $args);
        ScriptVariables::add('data.comments', $comments);

        return view('plugins/comment::admin.dashboard');
    }

    /**
     * Show the settings page.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function settings(Request $request)
    {
        //dd('clgt');
        page_title()->setTitle(trans('plugins/comment::settings.name'));

        Assets::addStylesDirectly('vendor/core/plugins/comment/css/admin.css')
            ->addScriptsDirectly('vendor/core/plugins/comment/js/admin.js');

        if (config('comments.emoji')) {
            Assets::addScripts('twemoji');
        }

        return view('plugins/comment::admin.settings')->with([
            'tabs' => $this->getInputs(),
        ]);
    }

    /**
     * Update the settings.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateSettings(Request $request)
    {
        $inputs = Arr::flatten($this->getInputs());

        $filter = function ($type) use ($inputs) {
            return array_filter($inputs, function ($input) use ($type) {
                return $input->getType() === $type;
            });
        };

        foreach ($filter(SettingInput::TEXT_TYPE) as $input) {
            if ($request->exists($key = $input->getKey())) {
                $this->settings->set($input->getKey(), e($request->get($key)));
            }
        }

        foreach ($filter(SettingInput::NUMBER_TYPE) as $input) {
            if ($request->exists($key = $input->getKey())) {
                $this->settings->set($input->getKey(), (int)abs($request->get($key)));
            }
        }

        foreach ($filter(SettingInput::SELECT_TYPE) as $input) {
            if ($request->exists($key = $input->getKey())) {
                $value = $request->get($key);
                if (in_array($value, $input->getData()['options'])) {
                    $this->settings->set($key, $value);
                }
            }
        }

        foreach ($filter(SettingInput::TEXTAREA_TYPE) as $input) {
            if ($request->exists($key = $input->getKey())) {
                $this->settings->set($input->getKey(), preg_split('/\r\n|[\r\n]/', $request->get($key)));
            }
        }

        foreach ($filter(SettingInput::BOOLEAN_TYPE) as $input) {
            if ($request->exists($key = $input->getKey())) {
                $this->settings->set($input->getKey(), (boolean)$request->get($key));
            }
        }

        Formatter::flush();

        return response()->json(null, 204);
    }

    /**
     * Reset the settings.
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetSettings()
    {
        foreach (Arr::flatten($this->getInputs()) as $input) {
            $this->settings->forget($input->getKey());
        }

        Formatter::flush();

        return response()->json(null, 204);
    }

    /**
     * Log out the user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->flush();

        $request->session()->regenerate();
    }

    /**
     * @return array
     */
    protected function getInputs()
    {
        $general = [
            SettingInput::boolean('allow_guests'),
            SettingInput::boolean('allow_votes'),
            SettingInput::boolean('allow_replies'),
            SettingInput::boolean('broadcast'),
            SettingInput::number('allow_edit'),
            SettingInput::number('allow_delete'),
            SettingInput::number('max_length'),
            SettingInput::number('per_page'),
            SettingInput::select('default_order', ['latest', 'oldest', 'best']),
            SettingInput::select('default_gravatar', ['404', 'mm', 'identicon', 'monsterid', 'wavatar']),
        ];

        if (!trait_exists('Illuminate\Broadcasting\InteractsWithSockets')) {
            unset($general[3]);
        }

        $formatting = [
            SettingInput::boolean('emoji'),
            SettingInput::boolean('markdown'),
            SettingInput::boolean('bbcodes'),
            SettingInput::boolean('auto_link'),
            SettingInput::boolean('auto_email'),
            SettingInput::boolean('auto_image'),
            SettingInput::boolean('auto_video'),
            SettingInput::boolean('media_embed'),
        ];

        $moderation = [
            SettingInput::boolean('moderation'),
            SettingInput::boolean('akismet'),
            SettingInput::textarea('moderation_keys'),
            SettingInput::textarea('blacklist_keys'),
            SettingInput::boolean('detect_duplicates'),
            SettingInput::number('max_unapproved'),
            SettingInput::number('max_links'),
            SettingInput::boolean('censor'),
            SettingInput::textarea('censored_words'),
            SettingInput::boolean('allow_reports'),
            SettingInput::number('max_reports'),
            SettingInput::select('report_status', ['pending', 'spam']),
        ];

        $protection = [
            SettingInput::boolean('captcha_guest'),
            SettingInput::boolean('captcha_auth'),
            SettingInput::boolean('throttle'),
            SettingInput::number('throttle_max_attempts'),
            SettingInput::number('throttle_decay_minutes'),
        ];

        $notifications = [
            SettingInput::boolean('reply_notification'),
            SettingInput::text('admin_notification'),
        ];

        return compact('general', 'formatting', 'moderation', 'protection', 'notifications');
    }

    /**
     * @return void
     */
    protected function setJavaScriptTranslations()
    {
        ScriptVariables::add('translations', array_merge(
            trans('plugins/comment::admin.javascript'),
            ['timeago' => trans('plugins/comment::javascript.timeago')]
        ));
    }
}
