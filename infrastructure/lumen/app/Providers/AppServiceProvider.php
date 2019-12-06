<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepositoryImpl;
use Domain\User\UserRepository;

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

    public function boot()
    {
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
        $this->app->bind(CreateUserService::class, CreateUserServiceImpl::class);
    }
}
