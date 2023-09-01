<?php

namespace App\Providers;

use App\Factories\HeroFactory;
use App\Services\FA\HeroService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(HeroService::class, function (Application $app) {
            $heroFactory = new HeroFactory();
            return new HeroService($heroFactory);
        });
    }
}
