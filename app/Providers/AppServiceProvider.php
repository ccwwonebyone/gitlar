<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //视图数据
        View::composer(
            ['layouts.master'],
            'App\Http\Composers\CompanyComposer'
        );
        View::share('status',['default','primary','success','warning','info','danger']);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
