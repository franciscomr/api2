<?php

namespace App\Http\Resources\Catalog\organizations;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class OrganizationCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => OrganizationResource::collection($this->collection),
            'links' => [
                'self' => route('catalog.organizations.index')
            ]
        ];
    }
}
