<?php

use Illuminate\Support\Facades\Route;

Route::get('/{catchall?}', 'GoxController@index');
