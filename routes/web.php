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

Route::get('/login','Controller@fazerLogin')->name('fazerLogin');

/* Route::get('/', function () {
    return view('welcome');
}); */
