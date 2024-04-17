<?php

namespace Modules\RickAndMorty\src\Providers;

use Carbon\Laravel\ServiceProvider;

class RickAndMortyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
