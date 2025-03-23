<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class HomeController

{
    public function index()
    {
        return view('Home/homepage');
    }
}