<?php

namespace Botble\LiveTemplate\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ListCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'label'        => $this->name,
            'children'    => ListCategoryResource::collection($this->children),
        ];
    }
}
