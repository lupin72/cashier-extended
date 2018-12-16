<?php
namespace Horsetap\Cashier;
use Illuminate\Support\ServiceProvider;
class HorsetapCashierServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(realpath(__DIR__.'/../database/migrations'));
    }
}