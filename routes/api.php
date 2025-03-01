<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Usermiddleware;

//Middlewawre
Route::get('/user', function (Request $request) {
    echo 'Welcome - API - Test Middleware';
})->middleware(Usermiddleware::class);