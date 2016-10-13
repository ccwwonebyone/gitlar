<?php

namespace App\Http\Composers;

use DB;
use Illuminate\Contracts\View\View;

class CompanyComposer
{
    /**
     * 绑定数据到视图.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
       $view->with('companyInfo', $this->getCompanyInfo())->with('menus',$this->getMenu());
    }
    /**
     * 获取网站公司信息
     * @return array $companyInfo
     */
    public function getCompanyInfo()
    {
        $company = DB::table('company')->first();
        $companyInfo = get_object_vars($company);
        return $companyInfo;
    }
    /**
     * 获取网站菜单信息
     * @return array $menus
     */
    public function getMenu()
    {
        $menuData = DB::table('menu')->where('is_show',1)->where('belong',1)->get();
        $menus = [];
        foreach ($menuData as $data) {
            $menu['name'] = $data->name;
            $menu['url']  = url($data->url);
            $menu['icon']  = $data->icon;
            $menus[] = $menu;
            $menu = '';
        }
        return $menus;
    }
}