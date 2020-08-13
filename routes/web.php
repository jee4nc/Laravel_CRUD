<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('welcome');
Route::get('users', 'PageController@user_blade')->name('users');
Route::get('users/{id}', 'PageController@detail_user')->name('oficio.details');
Route::post('users', 'PageController@add_oficio')->name('add_oficio');