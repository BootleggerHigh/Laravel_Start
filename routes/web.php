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

Route::get('/','TasksController@index');
Route::get('task/{id}','TasksController@counter_increments');
Route::get('logs','LogsController@show');
Route::get('log/{id}','LogsController@status');
