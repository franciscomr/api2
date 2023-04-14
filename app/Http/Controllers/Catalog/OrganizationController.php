<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Organization;
use App\Http\Resources\Catalog\organizations\OrganizationCollection;
use App\http\Requests\Catalog\OrganizationRequest;
use App\Http\Resources\Catalog\organizations\OrganizationResource;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::applySortAndFilter(request('sort'), request('filter'))->get();
        return OrganizationCollection::make($organizations);
    }

    public function store(OrganizationRequest $request)
    {
        $organization = Organization::create($request->validated());
        return response()->json([
            'data' => OrganizationResource::make($organization)
        ], status: 201);
    }

    public function update(OrganizationRequest $request, Organization $organization)
    {
        Organization::where('id', '=', $organization->id)->update($request->validated());
        $organizationUpdated = Organization::where('id', '=', $organization->id);
        session()->flash('status', 'Task was successful!');
        return response()->json([
            'data' => 'ok'
        ], status: 200);
    }

    public function show(Organization $organization)
    {
        return response()->json([
            'data' =>  OrganizationResource::make($organization)
        ]);
    }
}
