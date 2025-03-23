<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnUserType
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->user_type == 0) {
                return redirect('/chef-department/dashboard');
            } elseif ($user->user_type == 1) {
                return redirect('/etudiant/dashboard');
            } elseif ($user->user_type == 2) {
                return redirect('/enseignant/dashboard');
            }
        }

        return $next($request);
    }
}