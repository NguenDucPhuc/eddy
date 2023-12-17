<?php

namespace App\Providers;
Use Schema; 
use Illuminate\Support\ServiceProvider;
use App\Helper\CartHelper;

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
        Schema::defaultStringLength(191);
        view()->composer('*',function($view){
            $view->with([
                'cart'=> new CartHelper()
            ]);
        });
    }
}
