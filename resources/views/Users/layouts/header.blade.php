@extends('Users.layouts.head')

<header>
    <div>
        <h1 id="logo">LOGO</h1>
    </div>
    <div id="h_items">
        <a href="#">Home</a>
        <a href="#id_items">Items</a>
        <a href="#">Chart</a>
        <a href="{{ asset('resources/views/Users/signup.blade.php') }}">Login</a>
      
    </div>
</header>
