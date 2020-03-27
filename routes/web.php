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
//Route::get('/show', 'UndefinedController@show');
//
//Route::name('post.')->group(function () {
//    Route::match(['get', 'post'], 'create', 'UndefinedController@create')->name('create');
//    Route::get('places/{id}/', 'UndefinedController@show_places')->name('places');
//    Route::match(['get', 'post'], '/photos/add/', 'UndefinedController@uploads_image')->name('image_places');
//    Route::match(['get','post'],'assessment','UndefinedController@assessment')->name('assessment');
//});

Route::resource('place','TypeController');
Route::resource('image','ImageController')->except(['index','edit','update','show']);
Route::resource('ratings','RatingsController')->only('store');

Route::get('download/{file}', 'DownloadsController@download')->name('download');
