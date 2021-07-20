<?php

namespace Botble\Media\Http\Requests\API;

use Botble\Support\Http\Requests\Request;

class MediaApiRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'path' => 'required|regex:/^[\pL\s\ \_\-0-9]+$/u',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'path.regex' => trans('core/media::media.name_invalid'),
        ];
    }
}
