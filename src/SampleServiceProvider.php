<?php
namespace Ahilan\Sample;

use \Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resource/views', 'sample');

        $this->publishes([
            __DIR__.'/config/sample.php' => config_path('sample.php'),
        ]);

        $this->publishes([
            __DIR__.'/config/sample.php' => config_path('sample.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/config/sample.php' => config_path('sample.php')
        ], 'views');
    }
}
