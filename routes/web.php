<?php

use App\Http\Controllers\leadController;
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
    return ('HOME _ PAGE');
});



Route::get('get', 'App\Http\Controllers\leadController@get');
Route::post('add', 'App\Http\Controllers\leadController@add');
Route::post('delete', 'App\Http\Controllers\leadController@delete');
Route::post('edit', 'App\Http\Controllers\leadController@edit');
