<?php

namespace App\Providers;

use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterfaces;
use App\Repositories\Interfaces\TeamRepositoryInterfaces;
use App\Repositories\TeamRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TeamRepositoryInterfaces::class, TeamRepository::class);
        $this->app->bind(CategoryRepositoryInterfaces::class, CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

