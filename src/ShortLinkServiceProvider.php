<?php

namespace Packafa\ShortLink;

use Illuminate\Support\ServiceProvider;
use Packafa\ShortLink;

class ShortLinkServiceProvider extends ServiceProvider
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
        require __DIR__. '\routes.php';

        $this->loadViewsFrom(__DIR__ . '\views','shortenLink');

        $this->publishes([
            __DIR__.'\Configs\shortlink.php' => config_path('shortlink.php'),
            // __DIR__.'\Models\ShortLink.php' => app_path('Models/ShortLink.php'),
            __DIR__.'\Migrations' => database_path('/migrations'),
            __DIR__.'\Views' => base_path('resources/views/shortlink'),
        ]);
    }
    
}
