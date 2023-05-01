<?php

namespace App\Http\Resources\Catalog\branches;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\Catalog\branches\BranchResource;

class BranchCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => BranchResource::collection($this->collection),
            'links' => [
                'self' => route('catalog.organizations.index')
            ]
        ];
    }
}
