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
    route::post('organizations', 'store')->name('catalog.organizations.store');
    route::patch('organizations/{organization}', 'update')->name('catalog.organizations.update');
    route::get('organizations/{organization}', 'show')->name('catalog.organizations.show');
});

Route::controller(BranchController::class)->group(function () {
    route::get('branches', 'index')->name('catalog.branches.index');
    route::post('branches', 'store')->name('catalog.branches.store');
    route::patch('branches/{branch}', 'update')->name('catalog.branches.update');
    route::get('branches/{branch}', 'show')->name('catalog.branches.show');
});

Route::controller(DepartmentController::class)->group(function () {
});

Route::controller(PositionController::class)->group(function () {
    route::get('positions', 'index')->name('catalog.positions.index');
    route::post('positions', 'store')->name('catalog.positions.store');
    route::get('positions/{position}', 'show')->name('catalog.positions.show');
});
