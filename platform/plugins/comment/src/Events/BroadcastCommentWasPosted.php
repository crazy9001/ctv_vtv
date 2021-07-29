<?php

namespace Botble\Comment\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BroadcastCommentWasPosted implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    /**
     * @var \Botble\Comment\Comment
     */
    public $comment;

    /**
     * Create a new event instance.
     *
     * @param  \Botble\Comment\Comment $comment
     * @return void
     */
    public function __construct($comment)
    {
        $this->comment = $comment;

        $this->dontBroadcastToCurrentUser();
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['page_'.$this->pageHash()];
    }

    /**
     * @return string
     */
    protected function pageHash()
    {
        if ($this->comment->page_id) {
            return md5($this->comment->page_id);
        }

        return md5($this->comment->commentable_id.'|'.$this->comment->commentable_type);
    }
}
