<?php

namespace Acadea\CollectionPaginator;

use Illuminate\Support\ServiceProvider;
use Acadea\CollectionPaginator\Commands\CollectionPaginatorCommand;

class CollectionPaginatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/collection-paginator.php' => config_path('collection-paginator.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/collection-paginator'),
            ], 'views');

            $migrationFileName = 'create_collection_paginator_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                CollectionPaginatorCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'collection-paginator');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/collection-paginator.php', 'collection-paginator');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
