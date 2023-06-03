<?php

namespace BuilderBuddy\BuddyMenus;

use Illuminate\Support\ServiceProvider;

class BuddyMenusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'buddymenus');

        $this->publishes([
            __DIR__ . '/../config/buddymenus.php' => config_path('buddymenus.php'),
        ], 'buddymenu-config');

        $this->commands([
            Console\Commands\InsertMenusCommand::class,
        ]);

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        $this->app->bind('buddy-menus', function () {
            return new BuddyMenus();
        });
    }
}
