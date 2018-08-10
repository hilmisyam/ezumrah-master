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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('user', 'UserController');

// please add route that need to login below
// please use resourcefull route for standard
Route::group(['middleware' => ['auth']], function () {

    // this is resourcefull route
    Route::resource('bus', 'BusController');

});
