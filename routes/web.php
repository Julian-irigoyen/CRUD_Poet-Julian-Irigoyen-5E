<?php
use App\Http\Controllers\EstructurasDeControl;

Route::get('/show', 'CRUD@index');
Route::get('/insert', 'CRUD@create');
Route::get('/detail/{id}', 'CRUD@show');
Route::get('/delete/{id}', 'CRUD@destroy');
Route::post('/save', 'CRUD@store');
Route::post('/update', 'CRUD@update');