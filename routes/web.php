<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',"MovieController@index")->name('home');
Route::post('/',"MovieController@store")->name('home');

Route::get('/movie/ActorsList/{id}', 'MovieController@show');
//Route::post('movie/ActorsList/{id}', 'MovieController@AddNewActor');

Route::get('/edit/{id}',"MovieController@edit");
Route::post('/edit/{id}',"MovieController@update");

Route::get('/actors',"ActorController@index");
Route::post('/actors',"ActorController@store");

Route::get('/actor/edit/{id}', 'ActorController@edit');
Route::post('/actor/edit/{id}', 'ActorController@update');

Route::get('/movie/delete/{id}', 'MovieController@delete');
Route::get('/actor/delete/{id}', 'ActorController@delete');
Route::get('/movie_cast/delete/{mov_id}/{cast_id}','MovieController@deleteRole');

Route::get('/movie/ActorsList/{id}/update', 'MovieController@createNewActor')->name('updatelistactors');
Route::post('/updatedList/{id}', 'ActorController@add')->name('addActor');


Route::get('/movie/edit/actor/{mov_id}/{act_id}', 'MovieController@editActorList');
Route::post('/movie/edit/actor/{mov_id}/{act_id}', 'MovieController@updateActorList');


Route::get('/movie/create',"MovieController@create");
Route::get('/actor/create',"ActorController@create");


//Route::get( '/movie/NewActor/{id}', 'MovieController@createNewActor');

Route::post('/search', 'MovieController@search')->name('search');
Route::get('/autocomplete', 'MovieController@autocomplete')->name('autocomplete');
