<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Position;
use App\Http\Resources\Catalog\Position\PositionResource;
use App\Http\Resources\Catalog\Position\PositionCollection;

class PositionController extends Controller
{
    public function index()
    {
        return request()->all();


        $positions = Position::applySorts(request('sort'))->get();
        return PositionCollection::make(Position::with('department')->get());
    }
    public function show(Position $department)
    {
        return PositionResource::make($department);
    }
}
