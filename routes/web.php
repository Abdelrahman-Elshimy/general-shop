<?php

use App\User;
use App\Product;
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

// admin routes

Route::group(['auht', 'user_is_admin'], function() {

  // units routes
  Route::get('units', 'UnitController@index')->name('units');
  Route::get('add-unit', 'UnitController@showAdd')->name('new-unit');
});
