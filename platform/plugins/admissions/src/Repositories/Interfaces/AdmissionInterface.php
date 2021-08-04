<?php

namespace Botble\Admission\Repositories\Interfaces;

use Botble\Support\Repositories\Interfaces\RepositoryInterface;

interface AdmissionInterface extends RepositoryInterface
{
    /**
     * @param array $select
     * @return mixed
     */
    public function getUnread($select = ['*']);

    /**
     * @return int
     */
    public function countUnread();
}
