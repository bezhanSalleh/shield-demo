<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            abstract: \BezhanSalleh\FilamentShield\Resources\RoleResource::class,
            concrete: \App\Filament\Resources\ShieldOverrideResource::class
        );

        Model::unguard();

        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
