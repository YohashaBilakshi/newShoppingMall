<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){

        return view('admin.index'); 
    }

    public function users(){

        return view('admin.admins.index'); 

    }

}
