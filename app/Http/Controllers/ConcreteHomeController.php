<?php

namespace App\Http\Controllers;

class ConcreteHomeController extends HomeController
{
    public function index()
    {
        return view('Home/homepage');
    }
}
