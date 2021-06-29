<?php

namespace App\Providers;

use App\Http\ViewComposers\NavigationComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.user.partial.nav','layouts.user.partial.nav-mobile'],NavigationComposer::class );
    }
}
