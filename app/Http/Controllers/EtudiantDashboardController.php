<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantDashboardController
{
    public function index()
    {
        return view('etudiant.dashboard');
    }
}