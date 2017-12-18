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

Route::get('/', "SushiController@mainInfo");

Route::get('/contacts', "SushiController@contacts");

Route::get('/actions', "SushiController@actions");

Route::get('/sushi', "SushiController@getSushi");

Route::get('/menu', "SushiController@getAllSushi");

Route::get('/delivery', "SushiController@delivery");
