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
Route::get('/','pagescontroller@homepage');
Route::get('home','pagescontroller@homepage');
Route::get('register','pagescontroller@register');
Route::get('about','pagescontroller@about');
Route::get('bunga','bungacontroller@bunga');
Route::get('template','pagescontroller@template');
Route::get('create','bungacontroller@create');
Route::post('simpan','bungacontroller@store');
Route::get('bunga/{bunga}','bungacontroller@show');
Route::get('bunga/{bunga}/edit','bungacontroller@edit');
Route::post('bunga/{bunga}/update','bungacontroller@update');
Route::get('bunga/{bunga}/destroy','bungacontroller@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

