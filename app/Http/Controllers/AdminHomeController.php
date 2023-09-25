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
        // return view('admin.admins.edit'); 

    }

    // public function edit($id){
        public function edit($id){
        // return view('admin.index'); 
        
        return view('admin.admins.edit'); 

        // return view('admin.admins.edit'); 
    }

}
