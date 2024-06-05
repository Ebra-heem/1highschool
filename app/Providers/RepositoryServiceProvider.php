<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\SchoolRepositoryInterface;
use App\Repositories\Eloquent\SchoolRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SchoolRepositoryInterface::class, SchoolRepository::class);
    }

    public function boot()
    {
        //
    }
}
