<?php

namespace Botble\Blog\Providers;

use Botble\Blog\Commands\MigrateOldDatabase;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MigrateOldDatabase::class
            ]);
        }
    }
}
