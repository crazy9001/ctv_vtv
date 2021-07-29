<?php

namespace Botble\Comment\Contracts;

interface Moderator
{
    /**
     * Determine the comment status.
     *
     * @param  \Botble\Comment\Comment $comment
     * @return string
     */
    public function determineStatus($comment);
}
