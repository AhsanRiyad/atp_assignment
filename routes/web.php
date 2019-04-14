<?php


Route::get('/login', 'AuthenticationController@login')->name('Authentication.loginCheck');


Route::post('/login', 'AuthenticationController@loginCheck')->name('Authentication.loginCheck');

Route::get('/register', 'AuthenticationController@register' )->name('Authentication.register');

Route::post('/register', 'AuthenticationController@registerUser' )->name('Authentication.register');


Route::post('/addToCart', 'ProductsController@addToCart' )->name('ProductsController.addToCart');


