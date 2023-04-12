<?php

namespace App\Http\Resources\Catalog\Position;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PositionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => PositionResource::collection($this->collection),
            'links' => [
                'self' => route('catalog.positions.index')
            ]
        ];
    }
}
