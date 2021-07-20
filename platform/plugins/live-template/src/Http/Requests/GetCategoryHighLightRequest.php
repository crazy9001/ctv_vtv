<?php


namespace Botble\LiveTemplate\Http\Requests;

use Botble\Support\Http\Requests\Request;

class GetCategoryHighLightRequest extends Request
{
    public function rules()
    {
        return [
            'category' => 'required|integer',
        ];
    }

    /**
     * Add parameters to be validated
     *
     * @return array
     */
    public function all($keys = null)
    {
        // Add route parameters to validation data
        return array_merge(parent::all(), $this->route()->parameters());
    }
}
