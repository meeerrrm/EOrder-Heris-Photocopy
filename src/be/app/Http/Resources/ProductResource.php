<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'product_id' => $this->id ?? NULL,
            'product_name' => $this->name ?? NULL,
            'product_photo' => $this->photo ?? NULL,
            'product_description' => $this->description ?? NULL,
            'product_type' => $this->type ?? NULL,
            'product_price' => $this->price ?? NULL,
            'product_created_at' => $this->created_at ?? NULL,
            'product_updated_at' => $this->updated_at ?? NULL,
        ];
    }
}
