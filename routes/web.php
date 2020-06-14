<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/bmi', 'BmiController@form')->name('bmi.form');
Route::post('/bmi', 'BmiController@result')->name('bmi.result');
Route::get('/ruffier', 'RuffierTestController@form')->name('ruffier-test.form');