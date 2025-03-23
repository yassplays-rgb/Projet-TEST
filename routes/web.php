<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConcreteHomeController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', [ConcreteHomeController::class, 'index']);
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::get('/register1', [RegisteredUserController::class, 'create1'])->name('register1');
Route::get('/register2', [RegisteredUserController::class, 'create2'])->name('register2');
Route::get('/dashboard1', function () {
    return view('dashboard1');
})->name('dashboard1');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->name('dashboard2');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
