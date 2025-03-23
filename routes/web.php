<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcreteHomeController;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ChefDepartmentDashboardController;
use App\Http\Controllers\EtudiantDashboardController;
use App\Http\Controllers\EnseignantDashboardController;
use App\Http\Controllers\HomeController; // Import HomeController

// Home route
Route::get('/', [ConcreteHomeController::class, 'index']);

// Registration routes
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::get('/register1', [RegisteredUserController::class, 'create1'])->name('register1');
Route::get('/register2', [RegisteredUserController::class, 'create2'])->name('register2');

// Dashboard routes for different user types
Route::middleware(['auth'])->group(function () {
    Route::get('/chef-department/dashboard', [ChefDepartmentDashboardController::class, 'index'])->name('chef-department.dashboard');
    Route::get('/etudiant/dashboard', [EtudiantDashboardController::class, 'index'])->name('etudiant.dashboard');
    Route::get('/enseignant/dashboard', [EnseignantDashboardController::class, 'index'])->name('enseignant.dashboard');
});

// Default dashboard route for authenticated users
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
Route::get('/dashboard', function () {
    $user = Auth::user(); // Use Auth facade to get the authenticated user
    if ($user->user_type == 0) {
        return redirect()->route('chef-department.dashboard');
    } elseif ($user->user_type == 1) {
        return redirect()->route('etudiant.dashboard');
    } elseif ($user->user_type == 2) {
        return redirect()->route('enseignant.dashboard');
    }
    return abort(403); // Forbidden if user type is not recognized
})->name('dashboard');

});
