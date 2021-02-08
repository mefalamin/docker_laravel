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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/profiles', 'App\Http\Controllers\CRUDController@index' );
Route::post('/profiles', 'App\Http\Controllers\CRUDController@create' );
Route::put('/profiles/{id}', 'App\Http\Controllers\CRUDController@update' );
Route::delete('/profiles/{id}', 'App\Http\Controllers\CRUDController@destroy');


