<?php

namespace App\Http\Resources\Catalog\Position;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PositionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'positions',
            'id' => (string) $this->id,
            'attributes' => [
                'name' => $this->name,
                'createdBy' => $this->createdBy,
                'updatedBy' => $this->resource->updatedBy,
                'createdAt' => $this->resource->createdAt,
                'updatedAt' => $this->resource->updatedAt,
            ],
            'relationships' => [
                'department' => [
                    'data' => [
                        'id' => $this->department->name,
                        'type' => 'department'
                    ]
                ]
            ]
        ];
    }
}
