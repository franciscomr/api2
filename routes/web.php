<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Catalog\OrganizationController;

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
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginView')->name('login');
});

Route::get('home', [HomeController::class, 'home'])->name('home');

Route::controller(OrganizationController::class)->group(function () {
    Route::get('organizations', 'index')->name('catalog.organizations.index');
    Route::get('organizations/create', 'create')->name('catalog.organizations.create');
});
