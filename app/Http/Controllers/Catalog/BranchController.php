<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Organization;
use App\Models\Catalog\Branch;
use App\Http\Resources\Catalog\branches\BranchCollection;
use App\Http\Resources\Catalog\branches\BranchResource;
use App\Http\Requests\Catalog\BranchRequest;

class BranchController extends Controller
{
    public function home()
    {
        return view('catalog.branches.home');
    }

    public function create()
    {
        $organizations = Organization::select('id', 'name')->pluck('name', 'id');
        return view('catalog.branches.form', compact('organizations'));
    }

    //Api methods
    public function index()
    {
        $branches = Branch::with('organization')->applySortAndFilter(request('sort'), request('filter'))->paginate(10);
        return BranchCollection::make($branches);
    }

    public function store(BranchRequest $request)
    {
        $branch = Branch::create($request->validated());
        session()->flash('valor', ['type' => 'success', 'message' => 'se ha creado una nueva organizacion']);
        return response()->json([
            'data' => BranchResource::make($branch)
        ], status: 201);
    }

    public function update(BranchRequest $request, Branch $branch)
    {
        Branch::where('id', '=', $branch->id)->update($request->validated());
        Branch::where('id', '=', $branch->id);
        session()->flash('message', ['type' => 'success', 'message' => 'Se registró exitosamente la departamento']);
        return response()->json([
            'data' => 'ok'
        ], status: 200);
    }

    public function show(Branch $branch)
    {
        return response()->json([
            'data' =>  BranchResource::make($branch)
        ]);
    }
}
