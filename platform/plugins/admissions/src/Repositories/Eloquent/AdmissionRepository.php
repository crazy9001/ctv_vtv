<?php

namespace Botble\Admission\Repositories\Eloquent;

use Botble\Admission\Enums\AdmissionStatusEnum;
use Botble\Admission\Repositories\Interfaces\AdmissionInterface;
use Botble\Support\Repositories\Eloquent\RepositoriesAbstract;

class AdmissionRepository extends RepositoriesAbstract implements AdmissionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getUnread($select = ['*'])
    {
        $data = $this->model->where('status', AdmissionStatusEnum::UNREAD)->select($select)->get();
        $this->resetModel();
        return $data;
    }

    /**
     * {@inheritDoc}
     */
    public function countUnread()
    {
        $data = $this->model->where('status', AdmissionStatusEnum::UNREAD)->count();
        $this->resetModel();
        return $data;
    }
}
