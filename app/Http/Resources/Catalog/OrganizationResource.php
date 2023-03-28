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
            'id' => (string) $this->resource->getRouteKey(),
            'attributes' => [
                'name' => $this->resource->name,
                'businessName' => $this->resource->bussinessName,
                'address' => $this->resource->address,
                'city' => $this->resource->city,
                'state' => $this->resource->state,
                'postalCode' => $this->resource->postalCode,
                'createdBy' => $this->resource->createdBy,
                'updatedBy' => $this->resource->updatedBy,
                'createdAt' => $this->resource->createdAt,
                'updatedAt' => $this->resource->updatedAt
            ],
            'links' => [
                'self' => route('catalog.organizations.show', $this->resource->getRouteKey())
            ]
        ];
    }
}
