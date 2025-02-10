<?php

use App\Controllers\HomeController;
use App\Controllers\ClientController;
use App\Routes\Route;

Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/product', 'HomeController@product');


Route::get('/clients', 'ClientController@index');


Route::dispatch();