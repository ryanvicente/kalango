<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SupabaseService;

class SupabaseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(SupabaseService::class, function () {
            return new SupabaseService();
        });

        // Alias opcional
        $this->app->alias(SupabaseService::class, 'supabase');
    }

    public function boot() {}
}
