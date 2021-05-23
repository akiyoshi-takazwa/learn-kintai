<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {

    Route::get('/', 'AdminController@index');
});
