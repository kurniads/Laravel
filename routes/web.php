<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');

//Biodata
Route::get('/biodata', 'BiodataController@index');
Route::get('/biodata/create', 'BiodataController@create');
Route::get('/biodata/{biodata}', 'BiodataController@show');
Route::get('/biodata/{biodata}/edit','BiodataController@edit');

Route::post('/biodata', 'BiodataController@store');

Route::delete('/biodata/{biodata}', 'BiodataController@destroy');

Route::patch('/biodata/{biodata}', 'BiodataController@update');
Route::resource('biodata', 'BiodataController');