<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        return view('Users.home');

    }

    public function login(){

        return view('Users.signup');

    }
}
