<?php

namespace Botble\Comment\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Botble\Comment\Formatter
 */
class Formatter extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'comments.formatter';
    }
}
