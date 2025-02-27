<?php

use App\Controllers\HomeController;
use App\Controllers\ClientController;
use App\Controllers\UseController;
use App\Routes\Route;

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/product', 'HomeController@product');


Route::get('/clients', 'ClientController@index');
Route::get('/client/create', 'ClientController@create');
Route::post('/client/create', 'ClientController@store');
Route::get('/client/show', 'ClientController@show');
Route::get('/client/edit', 'ClientController@edit');
Route::post('/client/edit', 'ClientController@update');
Route::post('/client/delete', 'ClientController@delete');


Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');


Route::dispatch();