<?php

namespace GigHighway\Providers;

use GigHighway\ViewComposers\AuthenticatedViewComposer;
use GigHighway\ViewComposers\NavbarViewComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('dashboard.index', AuthenticatedViewComposer::class);
        View::composer(['shared._layout-main', 'home.featured'], NavbarViewComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
