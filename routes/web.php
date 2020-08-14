<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('welcome');
Route::get('users', 'PageController@user_blade')->name('users');
Route::get('users/{id}', 'PageController@detail_user')->name('oficio.details');
Route::post('users', 'PageController@add_oficio')->name('add_oficio');
Route::get('/update_oficio/{id}', 'PageController@update_oficio')->name('update_oficio');
Route::put('/update_oficio/{id}', 'PageController@task_update_oficio')->name('routeOficioUpdate');