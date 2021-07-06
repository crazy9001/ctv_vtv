<?php

namespace Botble\LiveTemplate\Http\Requests;

use Botble\Support\Http\Requests\Request;

class HomeConfigRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            "ids" => [
                'required',
                'array', // input must be an array
            ],
            "ids.*" => [
                'required',
                'integer',   // input must be of type string
                'distinct', // members of the array must be unique
            ]
        ];
    }
}
