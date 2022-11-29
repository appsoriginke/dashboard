<?php

namespace Dashboard;

use Dashboard\Commands\SchemaPermissions;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/dashboard.php', 'dashboard'
        );
    }


    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dashboard');

        $this->publishes([
            __DIR__.'/../config/dashboard.php' => config_path('dashboard.php'),
        ]);

        if ($this->app->runningInConsole())
        {
            $this->commands([
                SchemaPermissions::class
            ]);
        }
    }
}
