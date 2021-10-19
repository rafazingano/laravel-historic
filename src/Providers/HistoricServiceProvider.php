<?php

namespace ConfrariaWeb\Historic\Providers;

use ConfrariaWeb\Historic\Services\HistoricService;
use Illuminate\Support\ServiceProvider;

class HistoricServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../../config/cw_historic.php' => config_path('cw_historic.php')], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HistoricService', function () {
            return new HistoricService();
        });
    }

}
