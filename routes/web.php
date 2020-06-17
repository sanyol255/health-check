<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('/bmi', 'BmiController@form')->name('bmi.form');
Route::post('/bmi', 'BmiController@result')->name('bmi.result');
Route::get('/ruffier', 'RuffierTestController@form')->name('ruffier-test.form');
Route::post('/ruffier', 'RuffierTestController@result')->name('ruffier-test.result');
Route::get('/shtange-genchi', 'ShtangeGenchiController@form')->name('shtange-genchi.form');
Route::post('/shtange-genchi', 'ShtangeGenchiController@result')->name('shtange-genchi.result');