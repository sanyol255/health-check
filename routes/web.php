<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/bmi', 'BmiController@index')->name('bmi-form');