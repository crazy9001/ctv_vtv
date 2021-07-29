<?php

namespace Botble\Comment\Listeners;

use Botble\Comment\Notifications;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Botble\Comment\Events\CommentWasPosted;
use Botble\Comment\Notifications\Notifiable;
use Botble\Comment\Events\BroadcastCommentWasPosted;

class HandleCommentWasPosted
{
    /**
     * Handle the event.
     *
     * @param  \Botble\Comment\Events\CommentWasPosted $event
     * @return void
     */
    public function handle(CommentWasPosted $event)
    {
        $comment = $event->comment;

        if (config('comments.broadcast') && $comment->approved()) {
            event(new BroadcastCommentWasPosted($comment));
        }

        if ($email = config('comments.admin_notification')) {
            $this->adminNotification($comment, $email);
        }

        if (config('comments.reply_notification')) {
            $this->replyNotification($comment);
        }
    }

    /**
     * @param  \Botble\Comment\Comment $comment
     * @return void
     */
    protected function replyNotification($comment)
    {
        if (! $comment->approved() || ! $comment->parent) {
            return;
        }

        $email = $comment->parent->author_email;
        $adminEmail = config('comments.admin_notification');

        if (!$email || $email === $adminEmail || $email === $comment->author_email) {
            return;
        }

        (new Notifiable($email))->notify(new Notifications\ReplyWasPosted($comment));
    }

    /**
     * @param  \Botble\Comment\Comment $comment
     * @param  string $email
     * @return void
     */
    protected function adminNotification($comment, $email)
    {
        if ($comment->user && $email === $comment->userAttribute('email') || $comment->spam()) {
            return;
        }

        (new Notifiable($email))->notify(new Notifications\CommentWasPosted($comment));
    }
}
