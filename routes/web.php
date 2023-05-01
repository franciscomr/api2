<?php

use App\Http\Controllers\Catalog\OrganizationController;
use App\Http\Controllers\Catalog\BranchController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('home', [HomeController::class, 'home'])->name('home');


Route::controller(OrganizationController::class)->group(function () {
    route::get('organizaciones/home', 'home')->name('catalog.organizations.home');
    route::get('organizaciones/create', 'create')->name('catalog.organizations.create');
    route::get('organizaciones/edit/{id}', 'edit')->name('catalog.organizations.edit');
});

Route::controller(BranchController::class)->group(function () {
    route::get('sucursales/home', 'home')->name('catalog.branches.home');
    route::get('sucursales/create', 'create')->name('catalog.branches.create');
    route::get('sucursales/edit/{id}', 'edit')->name('catalog.branches.edit');
});
