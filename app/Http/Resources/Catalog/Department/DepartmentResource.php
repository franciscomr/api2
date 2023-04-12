<?php

namespace App\Http\Resources\Catalog\Department;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'departments',
            'id' => (string) $this->id,
            'attributes' => [
                'name' => $this->name,
                'createdBy' => $this->createdBy,
                'updatedBy' => $this->resource->updatedBy,
                'createdAt' => $this->resource->createdAt,
                'updatedAt' => $this->resource->updatedAt,
            ]
        ];
    }
}
