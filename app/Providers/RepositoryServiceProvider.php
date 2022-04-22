<?php

namespace App\Providers;


use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Admin\AdminSqlRepository;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            AdminRepositoryInterface::class,
            AdminSqlRepository::class
        );


    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
