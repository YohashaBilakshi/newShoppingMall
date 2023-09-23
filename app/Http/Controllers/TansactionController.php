<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TansactionController extends Controller
{
    public function index(){
        return view('admin.transaction.index');
    }
}
