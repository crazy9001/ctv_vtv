<?php

namespace Botble\Comment\Events;

class CommentWasPosted
{
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
    }
}
