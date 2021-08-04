<?php

namespace Botble\Admission\Http\Requests;

use Botble\Support\Http\Requests\Request;

class AdmissionRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function rules()
    {
        if (setting('enable_captcha') && is_plugin_active('captcha')) {
            return [
                'name'                 => 'required',
                'email'                => 'required|email',
                'school'                => 'required',
                'mode_of_study'                => 'required',
                'specialized'                => 'required',
                'g-recaptcha-response' => 'required|captcha',
            ];
        }
        return [
            'name'    => 'required',
            'email'   => 'required|email',
            'school'                => 'required',
            'mode_of_study'                => 'required',
            'specialized'                => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'name.required'    => trans('plugins/contact::contact.form.name.required'),
            'email.required'   => trans('plugins/contact::contact.form.email.required'),
            'email.email'      => trans('plugins/contact::contact.form.email.email'),
            'school'                => 'Vui lòng nhập trường học',
            'mode_of_study'                => 'Vui lòng chọn hệ đào tạo',
            'specialized'                => 'Vui lòng chọn ngành đào tạo',
        ];
    }
}
