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
Route::get('/', function () {
    return view('index');
});
Route::get('/show', 'PlacesController@show');

Route::name('post.')->group(function () {
    Route::match(['get', 'post'], 'create', 'PlacesController@create')->name('create');
    Route::get('places/{id}/', 'PlacesController@show_places')->name('places');
    Route::match(['get', 'post'], '/photos/add/', 'PlacesController@uploads_image')->name('image_places');
    Route::match(['get','post'],'assessment','PlacesController@assessment')->name('assessment');
});
