<?php

namespace Vital\Pjaxer\Providers;

use Illuminate\Support\ServiceProvider;
use Vital\Pjaxer\Pjax;

class PjaxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //load views
        $this->loadViewsFrom(__DIR__.'\..\Views','pjax');
        //publish views
        $this->publishes([
            __DIR__.'\..\Views' => base_path('resources/views/vendor/pjax-head'),
        ]);
        //publis configs
        $this->publishes([
            __DIR__ . '\..\Config/pjax.php' => config_path('pjax.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('pjax', function(){
            return new Pjax();
        });

    }
}
