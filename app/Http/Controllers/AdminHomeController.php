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
        // return view('admin.admins.create'); 

    }

    public function edit($id){
        
        return view('admin.admins.edit'); 
    }

}
