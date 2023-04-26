<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class SpecialItemResource for packing special items.
 *
 * @package App\Http\Resources
 */
class SpecialItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param $request
     * @return array|Arrayable
     */
    public function toArray($request)
    {
        return [
            'item' => new ItemResource($this->item)
        ];
    }
}
