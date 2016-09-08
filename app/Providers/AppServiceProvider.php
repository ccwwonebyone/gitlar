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
        view()->composer(
            ['layouts.master','index','profile','Company'],'APP\Http\ViewComposers\CompanyComposer'
        );
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
        $menuTable = 'menu';
        if(\Schema::hasTable($menuTable)){
             try {
                $menuc = DB::table($menuTable)->where('is_show',1)->get();
                foreach ($menuc as $menu) {
                    $menuss['name'] = $menu->name;
                    $menuss['url']  = $menu->url;
                    $menuss['icon']  = $menu->icon;
                    $menus[] = $menuss;
                    $menuss = '';
                }
            } catch (ModelNotFoundException $e) {
                
            }
        }
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

    }
}
