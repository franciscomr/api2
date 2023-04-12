<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Organization;
use App\Http\Resources\Catalog\OrganizationResource;
use App\Http\Resources\Catalog\OrganizationCollection;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isNan;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Organization::factory()
        $organizations = Organization::applySorts(request('sort'))->get();
        return OrganizationCollection::make($organizations);

        $sortFields = Str(request('sort'))->explode(',');
        $organizationQuery = Organization::query();
        foreach ($sortFields as $sortField) {
            $direction = 'asc';
            if (Str::of($sortField)->startsWith('-')) {
                $direction = 'desc';
                $sortField = Str($sortField)->substr(1);
            }
            $organizationQuery->orderBy($sortField, $direction);
        }




        /*
        $page = [
            'number' => (string) 1,
            'size' => (string) 10
        ];
        if (isset(request('page')['number']) && is_numeric(request('page')['number']) && request('page')['number'] > 0) {
            $page['number'] = request('page')['number'];
        }
        if (isset(request('page')['size']) && is_numeric(request('page')['size']) && request('page')['size'] > 1) {
            $page['size'] = request('page')['size'];
        }

        */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        return OrganizationResource::make($organization);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
