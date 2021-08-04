<?php

namespace Botble\Admission\Repositories\Caches;

use Botble\Support\Repositories\Caches\CacheAbstractDecorator;
use Botble\Admission\Repositories\Interfaces\AdmissionInterface;

class AdmissionCacheDecorator extends CacheAbstractDecorator implements AdmissionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getUnread($select = ['*'])
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }

    /**
     * {@inheritDoc}
     */
    public function countUnread()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
