<?php

use App\Http\Controllers\Catalog\BranchController;
use App\Http\Controllers\Catalog\DepartmentController;
use App\Http\Controllers\Catalog\OrganizationController;
use App\Http\Controllers\Catalog\PositionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(OrganizationController::class)->group(function () {
    route::get('organizations', 'index')->name('catalog.organizations.index');
    route::get('organizations/{organization}', 'show')->name('catalog.organizations.show');
});

Route::controller(BranchController::class)->group(function () {
});

Route::controller(DepartmentController::class)->group(function () {
});

Route::controller(PositionController::class)->group(function () {
    route::get('positions', 'index')->name('catalog.positions.index');
    route::get('positions/{position}', 'show')->name('catalog.positions.show');
});
