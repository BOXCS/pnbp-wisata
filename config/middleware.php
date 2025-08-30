<?php

return [

    // Middleware to be applied globally
    'global' => [
        \App\Http\Middleware\SetLocale::class,  // Register the SetLocale middleware here for all requests
    ],

    // Middleware groups that can be used for specific routes
    'web' => [
        \App\Http\Middleware\SetLocale::class,  // Apply locale switching middleware to web routes
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],

    'api' => [
        \App\Http\Middleware\SetLocale::class,  // Optional: Apply locale switching middleware to API routes if needed
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
    
    'locale' => \App\Http\Middleware\SetLocale::class,

    // Define other custom middleware groups as needed
];
