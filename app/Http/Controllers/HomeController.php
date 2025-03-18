<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

abstract class HomeController extends Controller

{
    public function index()
    {
        return view('Home/homepage');
    }
    public function register(){
        $user = Auth::user(); // Get the authenticated user
        $user_type = $user ? $user->user_type : null; // Access the user_type property
        if ($user_type === null) {
            return redirect()->route('login'); // Redirect if user is not authenticated
        }

        if ($user_type == 1) {



            return redirect()->route('dashboard1'); 
        } elseif ($user_type == 2) {

            return redirect()->route('dashboard2'); 
        } elseif ($user_type == 0) {

            return redirect()->route('dashboard'); 

        }
    }
}

