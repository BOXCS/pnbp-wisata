<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->session()->get('locale', config('app.locale'));

        if (in_array($locale, ['en', 'id', 'zh', 'es'])) { // Validasi bahasa
            App::setLocale($locale);
        }

        return $next($request);
    }
}
