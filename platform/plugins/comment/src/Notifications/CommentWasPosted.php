<?php

namespace Botble\Comment\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CommentWasPosted extends Notification
{
    use Queueable;

    /**
     * @var \Botble\Comment\Comment
     */
    public $comment;

    /**
     * Create a new notification instance.
     *
     * @param \Botble\Comment\Comment
     * @return void
     */
    public function __construct($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(trans('plugins/comment::emails.comment_subject', [
                'author' => $this->comment->author_name
            ]))
            ->line(trans('plugins/comment::emails.comment_author', [
                'name' => $this->comment->author_name,
                'email' => $this->comment->author_email,
            ]))
            ->line(trans('plugins/comment::emails.comment_status', [
                'status' => $this->comment->status
            ]))
            ->line(trans('plugins/comment::emails.comment_content', [
                'content' => $this->comment->content
            ]))
            ->line(trans('plugins/comment::emails.comment_edit_url', [
                'url' => $this->comment->edit_url,
            ]))
            ->action(trans('plugins/comment::emails.view_action'), $this->comment->permalink);
    }
}
