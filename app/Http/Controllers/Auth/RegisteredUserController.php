<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log; // Import Log facade


class RegisteredUserController extends Controller
{
    /**
     * Show the registration form for Étudiant.
     */
    public function create1()
    {
        return view('auth.register1');
    }

    /**
     * Show the registration form for Enseignant.
     */
    public function create2()
    {
        return view('auth.register2');
    }
    /**
     * Handle user registration.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([

            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'user_type' => ['required', 'integer', 'in:0,1,2'], 
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
            'user_type' => $request->user_type, 
        ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log the validation errors
            Log::error('Validation errors: ', $e->errors());
            return redirect()->back()->withErrors($e->errors())->withInput();
        }}
}
