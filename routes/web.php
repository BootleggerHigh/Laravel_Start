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
    return view('welcome');
});
Route::get('/parcel','TasksController@show');
Route::get('/parcel/{id}','TasksController@counter');
Route::get('/info_work','TasksController@work');
Route::get('/info_work/{id}','TasksController@work_counter');
