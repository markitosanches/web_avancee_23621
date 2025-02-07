<?php
include('controllers/HomeController.php');
include('routes/Route.php');

Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/product', 'HomeController@product');


Route::dispatch();