<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

abstract class Controller
{
    
    public function index(UserService $userService) {
        return $userService->listusers();
    }
}
