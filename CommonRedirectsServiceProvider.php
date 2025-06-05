<?php

declare(strict_types=1);

namespace Zaimea\CommonRedirects;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CommonRedirectsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->configureRoutes();
    }

    /**
     * Configure the routes offered by the application.
     *
     * @return void
     */
    protected function configureRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/redirects.php');
    }
}
