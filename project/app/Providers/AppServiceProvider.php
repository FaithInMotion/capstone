<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\story;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar.main', function($view)
        {
            $view->with('stories', story::take(11)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
