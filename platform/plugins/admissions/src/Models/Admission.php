<?php

namespace Botble\Admission\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Admission\Enums\AdmissionStatusEnum;
use Botble\Base\Models\BaseModel;

class Admission extends BaseModel
{
    use EnumCastable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admissions';

    /**
     * The date fields for the model.clear
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'school',
        'mode_of_study',
        'specialized',
        'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'status' => AdmissionStatusEnum::class,
    ];

}
