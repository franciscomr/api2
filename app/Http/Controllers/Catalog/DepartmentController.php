<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Department;
use App\Http\Resources\Catalog\Department\DepartmentResource;


class DepartmentController extends Controller
{
    public function index()
    {
        return DepartmentResource::collection(Department::all());
    }
    public function show(Department $department)
    {
        return DepartmentResource::make($department);
    }
}
