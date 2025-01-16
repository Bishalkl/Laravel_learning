<?php

namespace App\Providers;

use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\View;
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
        View::composer("*", function (ViewView $view) {
            $view->with("name", "Bishal koirala");
        });
    }
}
