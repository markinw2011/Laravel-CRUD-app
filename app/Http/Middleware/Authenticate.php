<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function redirectTo(Requesy $request): ?string 
    {
        return $request->expectJson() ? null : route('login');
    }

    public function profile()
    {
        return view('profile');
    }
}
