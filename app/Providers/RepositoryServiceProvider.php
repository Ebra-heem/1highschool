<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Eloquent\SchoolRepository;
use App\Repositories\Eloquent\StudentRepository;
use App\Repositories\Contracts\SchoolRepositoryInterface;
use App\Repositories\Contracts\StudentRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SchoolRepositoryInterface::class, SchoolRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
    }

    public function boot()
    {
        //
    }
}
