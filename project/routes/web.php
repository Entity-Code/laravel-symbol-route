<?php
use Illuminate\Support\Facades\Route;



Route::get('/', 'MainController@sayHello')
    -> name('home');
