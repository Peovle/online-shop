<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// TODO: Set Web routes
// Home / Welcome page
// Login
// Register
// Admin panel
// User

// Item resource controller
Route::resource('item', \App\Http\Controllers\Web\ItemController::class);

Route::get('special', [\App\Http\Controllers\Web\ItemController::class, 'special'])
    ->name('all.special');

// Brand resource controller
Route::resource('brand', \App\Http\Controllers\Web\BrandController::class);

// Category resource controller
Route::resource('category', \App\Http\Controllers\Web\CategoryController::class);

// Admin routes
Route::get('/admin', [\App\Http\Controllers\User\AdminController::class, 'index'])
    ->name('admin.panel');

// User routes
Route::post('login', [\App\Http\Controllers\User\UserController::class, 'login'])
    ->name('user.login');

Route::post('register', [\App\Http\Controllers\User\UserController::class, 'register'])
    ->name('user.register');

Route::post('logout', [\App\Http\Controllers\User\UserController::class, 'logout'])
    ->name('user.logout');
