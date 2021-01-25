<?php
use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@showHome')
    -> name('home');


Route::get('/blog', 'MainController@showBlog')
    -> name('blog');

Route::get('/about', 'MainController@showAbout')
    -> name('about');
