<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Services\UserService;

Route::get('/', function () {
    return view('welcome');
});

//service container
Route::get('/test-container', function (Request $request) {
    $input = $request->input('key');
    return $input;
});

//service provider
Route::get('/test-provider', function (UserService $userService) {
    return $userService->listusers();
    //dd($userService->listusers());
});

//service user
Route::get('/test-users',[UserController::class,'index']);

//facade
Route::get('/test-facade', function (UserService $userService) {
    return Response::json ($userService->listusers());
    //dd(Response::json ($userService->listusers()));
});