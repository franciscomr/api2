<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Organization;
use App\Http\Resources\Catalog\organizations\OrganizationCollection;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::applySaf(request('sort'), request('filter'))->get();
        return OrganizationCollection::make($organizations);
    }

    public function show(Organization $organization)
    {
        //
    }
}
