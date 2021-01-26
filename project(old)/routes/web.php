<?php
use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@showHome')
    -> name('home');


Route::get('/blog', 'MainController@showBlog')
    -> name('blog');

Route::get('/about', 'MainController@showAbout')
    -> name('about');

Route::get('/control', 'MainController@control')
    -> name('control');

Route::get('/snake-1', 'MainController@snake1')
    -> name('snake-1');




