<?php

namespace App\Providers;

use DB;
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
        $table = 'company';
        if(\Schema::hasTable($table)){
             try {
                $company = DB::table($table)->first();
                $companyInfo = ['name'=>$company->name,'create_time'=>$company->create_time];
            } catch (ModelNotFoundException $e) {
                $companyInfo = ['name' => '最美不过你','create_time' => date('Y-m-d')];
            }
        }else{
            $companyInfo = ['name' => '最美不过你','create_time' => date('Y-m-d')];
        }
        $menus = [
            ['url' => 'index',
             'menu' => '主页'],
        ];
        view()->share('companyInfo', $companyInfo);
        view()->share('menus', $menus);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
