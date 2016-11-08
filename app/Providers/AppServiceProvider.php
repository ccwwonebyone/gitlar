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
        $contact = ['weixin'=>'微信-25','sina'=>'新浪-27','tel'=>'联系-09','qq'=>'QQ-29'];
        View::share('contact',$contact);
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
