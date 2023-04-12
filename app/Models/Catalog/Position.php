<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Sorts;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Position extends Model
{
    use HasFactory, Sorts;


    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'department_id',
        'name',
        'createdBy',
        'updatedBy'
    ];

    public $allowedSorts = [
        'id',
        'name',
        'createdBy',
        'updatedBy',
        'createdAt',
        'updatedAt',
    ];

    public $filtrable = [
        'id',
        'name',
        'createdBy',
        'updatedBy',
        'createdAt',
        'updatedAt',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
