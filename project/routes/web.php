<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@showPagamenti')
    -> name('pagamenti');

Route::get('/pagamenti-pending', 'MainController@showPagamentiPending')
    -> name('pending');

