<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefDepartmentDashboardController
{
    public function index()
    {
        return view('chef-department.dashboard');
    }
}