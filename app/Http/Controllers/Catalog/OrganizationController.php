<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalog\OrganizationRequest;
use App\Http\Resources\Catalog\OrganizationCollection;
use App\Http\Resources\Catalog\OrganizationResource;
use Illuminate\Http\Request;
use App\Models\Catalog\Organization;

class OrganizationController extends Controller
{
    private const TITLE = 'Organizaciones';
    private const BASE_PATH = 'catalog.organizations';
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'create']);
    }

    public function index()
    {
        return view('catalog.organizations.index', ['title' => self::TITLE, 'basepath' => self::BASE_PATH]);
    }

    public function search()
    {

        $organizations = Organization::applySorts(request('sort'))->get();
        return OrganizationCollection::make($organizations);
    }

    public function create()
    {
        return view('catalog.organizations.form', ['title' => self::TITLE, 'basepath' => self::BASE_PATH]);
    }

    public function store(OrganizationRequest $request)
    {


        $organization = Organization::create($request->validated()['data']['attributes']);

        return response()->json([
            'data' => OrganizationResource::make($organization)
        ]);
    }

    public function show(Organization $organization)
    {
        return OrganizationResource::make($organization);
    }

    public function update(OrganizationRequest $request, Organization $organization)
    {
        return $request->validated();
    }
}





//auth('sanctum')->user()->username