<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // Alias de middleware
        $middleware->alias([
            'supabase.auth' => \App\Http\Middleware\SupabaseAuth::class,
            'verify.supabase' => \App\Http\Middleware\VerifySupabaseToken::class,
        ]);

    })

    ->withProviders([
        App\Providers\SupabaseServiceProvider::class,
    ])

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
