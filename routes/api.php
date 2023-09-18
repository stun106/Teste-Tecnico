<?php

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

Route::apiResource('user','App\Http\Controllers\UserController');
Route::get('api/user/{id}','App\Http\Controllers\UserController@index');
Route::apiResource('profile','App\Http\Controllers\RegisterController');
Route::apiResource('profile/{id}','App\Http\Controllers\RegisterController');

