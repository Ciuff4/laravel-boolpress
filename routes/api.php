<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('posts','Api\PageController@index');
