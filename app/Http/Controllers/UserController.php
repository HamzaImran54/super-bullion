<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected UserService $userService){}


    public function index()
    {
        $data = $this->userService->index();
        return view('welcome',compact('data'));
    }
}
