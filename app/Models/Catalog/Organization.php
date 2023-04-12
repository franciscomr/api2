<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
    
    protected $fillable = [
            'name',
            'businessName',
            'address',
            'city',
            'state',
            'postalCode',
            'createdBy',
            'updatedBy'
        ];
}
