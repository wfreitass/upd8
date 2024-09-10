<?php

namespace App\Providers;


use App\Interfaces\AnimalRepositoryInterface;
use App\Interfaces\AnimalServiceInterface;
use App\Interfaces\ConsultationRepositoryInterface;
use App\Interfaces\ConsultationServiceInterface;
use App\Interfaces\TipoAnimalRepositoryInterface;
use App\Interfaces\TipoAnimalServiceInterface;
use App\Models\Animal;
use App\Policies\AnimalPolicy;
use App\Repositories\AnimalRepository;
use App\Repositories\ConsultationRepository;
use App\Repositories\TipoAnimalRepository;
use App\Services\AnimalService;
use App\Services\ConsultationService;
use App\Services\TipoAnimalService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AnimalRepositoryInterface::class, AnimalRepository::class);
        $this->app->bind(AnimalServiceInterface::class, AnimalService::class);


        $this->app->bind(TipoAnimalRepositoryInterface::class, TipoAnimalRepository::class);
        $this->app->bind(TipoAnimalServiceInterface::class, TipoAnimalService::class);


        $this->app->bind(ConsultationRepositoryInterface::class, ConsultationRepository::class);
        $this->app->bind(ConsultationServiceInterface::class, ConsultationService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Animal::class, AnimalPolicy::class);
    }
}
