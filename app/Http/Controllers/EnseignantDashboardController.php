<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantDashboardController
{
    public function index()
    {
        return view('enseignant.dashboard');
    }
}