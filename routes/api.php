<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\OrganizationController;
use App\Http\Controllers\Catalog\DepartmentController;
use App\Http\Controllers\Catalog\PositionController;

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
    Route::get('organizations', 'index')->name('catalog.organizations.index');
    Route::get('organizations/{organization}', 'show')->name('catalog.organizations.show');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('departments', 'index')->name('catalog.departments.index');
    Route::get('departments/{department}', 'show')->name('catalog.departments.show');
});

Route::controller(PositionController::class)->group(function () {
    Route::get('positions', 'index')->name('catalog.positions.index');
    Route::get('positions/{position}', 'show')->name('catalog.positions.show');
});
