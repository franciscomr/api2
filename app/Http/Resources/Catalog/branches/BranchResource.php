<?php

namespace App\Http\Resources\Catalog\branches;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'branches',
            'id' => (string) $this->resource->id,
            'attributes' => [
                'name' => $this->resource->name,
                'address' => $this->resource->address,
                'city' => $this->resource->city,
                'state' => $this->resource->state,
                'postalCode' => $this->resource->postalCode,
                'createdBy' => $this->resource->createdBy,
                'updatedBy' => $this->resource->updatedBy,
                'createdAt' => $this->resource->createdAt,
                'updatedAt' => $this->resource->updatedAt
            ],
            'relationships' => [
                'branch' => [
                    'data' => [
                        'id' =>  $this->resource->organization->id,
                        'type' => 'organizations'
                    ]
                ]
            ],
            'links' => [
                'self' => route('catalog.branches.show', $this->resource->id)
            ]
        ];
    }
}
