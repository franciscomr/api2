<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Position;

class PositionController extends Controller
{
    public function index()
    {
        return request()->all();
    }

    public function show(Position $position)
    {
        //
    }
}
