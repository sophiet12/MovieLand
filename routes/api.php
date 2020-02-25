<?php

use Illuminate\Http\Request;

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

// List all actors
Route::get('/actors', 'Api\ActorController@index');

// List a single actor
Route::get('/actor/{id}', 'Api\ActorController@show');

// Create a new actor
Route::post('actor', 'Api\ActorController@store');

// Update an actor
Route::put('actor', 'Api\ActorController@store');

// Delete an actor
Route::delete('actor/{id}', 'Api\ActorController@destroy');
