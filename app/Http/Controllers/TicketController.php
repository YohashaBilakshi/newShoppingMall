<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function show(){

        echo  "hi";
    }

    public function add_ticket(Request $request){

        dd('dddd');
    }
}
