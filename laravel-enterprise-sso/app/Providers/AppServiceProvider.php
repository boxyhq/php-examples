<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\BoxyHQ\JacksonProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');

        $socialite->extend(
            'jackson',
            function ($app) use ($socialite) {
                $config = config('jackson');

                return $socialite->buildProvider(JacksonProvider::class, $config)
                    ->setHost($config['host'] ?? null);
            }
        );
    }
}
