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
Route::get('/','PlacesController@show');
Route::match(['get', 'post'],'create','PlacesController@create');
Route::get('places/{id}/','PlacesController@show_places');
Route::match(['get','post'],'places/{id}/photos/add','PlacesController@uploads_image');
