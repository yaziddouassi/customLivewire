<?php

namespace Rabahlivewire\Rabahlivewire;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','rabahlivewire');

        Livewire::component('comp1', \Rabahlivewire\Rabahlivewire\Livewire\Comp1::class);

    }
}