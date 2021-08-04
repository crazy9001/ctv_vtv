<?php

namespace Botble\Admission\Http\Requests;

use Botble\Admission\Enums\AdmissionStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class EditAdmissionRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => Rule::in(AdmissionStatusEnum::values()),
        ];
    }
}
