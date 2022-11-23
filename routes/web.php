<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
// Route::get('/', 'App\Http\Controllers\BookController@index')->name('home');
// Route::get('/create', 'App\Http\Controllers\BookController@create')->name('create');
// Route::get('/store', 'App\Http\Controllers\BookController@store')->name('store');
Route::resource('/books', BookController::class);