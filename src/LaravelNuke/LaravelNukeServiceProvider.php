<?php

namespace Nubix\LumenGenerator;

use Illuminate\Support\ServiceProvider;
use Nubix\LaravelNuke\Console\Commands\NukeCommand;

class LaravelNukeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(NukeCommand::class);
    }
}
