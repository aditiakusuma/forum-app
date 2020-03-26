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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/treads', 'TreadsController@index');
Route::post('/treads', 'TreadsController@store');
Route::get('/treads/create', 'TreadsController@create');
Route::get('/treads/{chanel}/{tread}', 'TreadsController@show');

// diganti denga satu route berikut
Route::get('treads', 'TreadsController@index');
Route::resource('treads', 'TreadsController');

Route::post('/treads/{chanel}/{tread}/replies', 'RepliesController@store');