<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class pizzasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //things i wanna to show in array
        return [
            "pizza-name" => data_get($this, 'pizza-name'),
            "extra" => $this->extra,
            "size" => $this->size,
            "price" => $this->price,
             "pic" => asset('storage/pizzas/') . "/" . $this->pic,
            "category" => new CategoryResource($this->category)
        ];
    }
}
