<?php

namespace Nubix\LaravelNuke\Console\Commands;

use Illuminate\Console\Command;

class NukeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nuke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears application, view and config cache';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('view:clear');
        $this->call('cache:clear');
        $this->call('config:clear');
    }
}
