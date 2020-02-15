<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::as('admin.')
            ->prefix('admin')
            ->middleware(['web', 'auth.admin', 'revalidate', 'site_restricted'])
            ->namespace("{$this->namespace}\Admin")
            ->group(base_path('routes/admin.php'));

        Route::middleware(['web', 'revalidate', 'site_restricted'])
            ->namespace("{$this->namespace}\Front")
            ->group(base_path('routes/main.php'));

        Route::middleware(['web', 'revalidate', 'site_restricted'])
            ->namespace($this->namespace)
            ->group(base_path('routes/auth.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::as('api.')
            ->prefix('api')
            ->middleware('api')
            ->namespace("{$this->namespace}\API")
            ->group(base_path('routes/api.php'));
    }
}
