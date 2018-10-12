<?php

Route::redirect('/', '/articles');

Route::resource('articles', 'ArticleController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
