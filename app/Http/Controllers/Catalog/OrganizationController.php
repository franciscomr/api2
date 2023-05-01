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
    public function home()
    {
        return view('catalog.organizations.home');
    }

    public function create()
    {
        return view('catalog.organizations.form');
    }

    public function edit($id)
    {
        $data = Organization::findOrFail($id);
        $is_new_record = false;
        return view('catalog.organizations.form', compact('data', 'is_new_record'));
    }

    //Api methods
    public function index()
    {
        $organizations = Organization::applySortAndFilter(request('sort'), request('filter'))->paginate(10);
        return OrganizationCollection::make($organizations);
    }

    public function store(OrganizationRequest $request)
    {
        $organization = Organization::create($request->validated());
        session()->flash('valor', ['type' => 'success', 'message' => 'se ha creado una nueva organizacion']);
        return response()->json([
            'data' => OrganizationResource::make($organization)
        ], status: 201);
    }

    public function update(OrganizationRequest $request, Organization $organization)
    {
        Organization::where('id', '=', $organization->id)->update($request->validated());
        Organization::where('id', '=', $organization->id);
        session()->flash('message', ['type' => 'success', 'message' => 'Se registró exitosamente la departamento']);
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
