<?php

namespace Botble\Comment\Http\Requests;

use Botble\Comment\Comment;
use Illuminate\Foundation\Http\FormRequest;

class BulkUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ids' => 'required|array',
            'status' => 'required|in:approved,pending,spam,trash,delete',
        ];
    }
}
