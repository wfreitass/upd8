<?php

namespace App\Providers;

use App\Interfaces\ClienteRepositoryInterface;
use App\Interfaces\ClienteServiceInterface;
use App\Repositories\ClienteRepository;
use App\Services\ClienteService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ClienteRepositoryInterface::class, ClienteRepository::class);
        $this->app->bind(ClienteServiceInterface::class, ClienteService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}
