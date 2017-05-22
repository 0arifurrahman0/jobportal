<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
		
        view()->composer('layouts.theme', function($view){

            $theme = \App\Theme::currentTheme();

            $view->with(compact('theme'));

        });		
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		if ($this->app->environment() == 'local') {
			$this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
		}
    }
}
