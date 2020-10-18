<?php

namespace Acadea\CollectionPaginator;

use Illuminate\Support\ServiceProvider;

class CollectionPaginatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/collection-paginator.php' => config_path('collection-paginator.php'),
            ], 'config');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'collection-paginator');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/collection-paginator.php', 'collection-paginator');
    }
}
