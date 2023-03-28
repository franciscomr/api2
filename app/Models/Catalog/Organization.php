<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasSorts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Organization extends Model
{
    use HasFactory, HasSorts;



    protected $fillable = [
        'name',
        'businessName',
        'address',
        'city',
        'state',
        'postalCode',
        'createdBy',
        'updatedBy',
    ];

    public $allowedSorts = [
        'name',
        'businessName',
        'address',
        'city',
        'state',
        'postalCode',
        'createdBy',
        'updatedBy',
        'createdAt',
        'updatedAt',
    ];
}
