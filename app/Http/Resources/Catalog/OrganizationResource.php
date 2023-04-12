<?php

namespace App\Http\Resources\Catalog;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'organizations',
            'id' => (string) $this->id,
            'attributes' => [
                'name' => $this->name,
                'businessName' => $this->businessName,
                'address' => $this->address,
                'city' => $this->city,
                'state' => $this->state,
                'postalCode' => $this->postalCode,
                'createdBy' => $this->createdBy,
                'updatedBy' => $this->resource->updatedBy,
                'createdAt' => $this->resource->createdAt,
                'updatedAt' => $this->resource->updatedAt,
            ],
            'links' => [
                'self' => route('catalog.organizations.show', $this->id)
            ]
        ];
    }
}
