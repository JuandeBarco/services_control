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

Route::get('user_dashboard', 'RoutesController@user_dashboard')->name('user.dashboard');

Route::post('new_service', 'RoutesController@new_service')->name('user.new_service');
Route::get('update_service/{id}', 'RoutesController@user_update_service')->name('user.update_service');

Route::put('upd_service/{id}', 'RoutesController@update_service')->name('upd_service');
Route::delete('dlt_service/{id}', 'RoutesController@delete_service')->name('dlt_service');