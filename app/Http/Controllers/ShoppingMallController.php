<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingMallController extends Controller
{
    public function cart(){
        return view('Users.cart');
    }
}
