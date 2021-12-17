<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::resource('admin/menu',App\Http\Controllers\MenuController::class);
Route::resource('admin/functionality',App\Http\Controllers\FunctionalityController::class);
Route::resource('admin/role',App\Http\Controllers\RoleController::class);
Route::resource('user',App\Http\Controllers\UserController::class);