<?php

namespace App\Models\Catalog;

use App\Models\Traits\HasSorts;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use DateTimeInterface;

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
        'id',
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

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
