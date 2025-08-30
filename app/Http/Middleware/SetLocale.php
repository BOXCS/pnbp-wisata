<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Ensure the session has the locale
        if (Session::has('locale')) {
            // Set the application locale correctly
            dd(app());
            app()->setLocale(Session::get('locale'));  // This should work without any issues
        }

        return $next($request);
    }
}
