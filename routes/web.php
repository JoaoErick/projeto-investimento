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

Route::get('/','Controller@homepage')->name('homepage');

Route::get('/cadastro','Controller@cadastrar')->name('cadastrar');


/** 
 * Routes to user auth
 * =====================================================================
 */
Route::get('/login','Controller@fazerLogin');
Route::post('/login','DashboardController@auth')->name('user.login');
Route::get('/dashboard','DashboardController@index')->name('user.dashboard');

Route::get('user','UsersController@index')->name('user.index');
