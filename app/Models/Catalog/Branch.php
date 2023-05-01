<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Traits\SortAndFilter;

class Branch extends Model
{
    use HasFactory, SortAndFilter;
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'organization_id',
        'name',
        'address',
        'city',
        'state',
        'postalCode',
        'createdBy',
        'updatedBy',
    ];

    public $allowedSorts = [
        'id',
        'organization_id',
        'name',
        'address',
        'city',
        'state',
        'postalCode',
        'createdBy',
        'updatedBy',
        'createdAt',
        'updatedAt',
    ];

    public $allowedFilters = [
        'id',
        'organization_id',
        'name',
        'address',
        'city',
        'state',
        'postalCode',
        'createdBy',
        'updatedBy',
        'createdAt',
        'updatedAt',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
