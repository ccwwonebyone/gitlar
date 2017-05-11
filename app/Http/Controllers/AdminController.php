<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController as Menu;

class AdminController extends Controller
{
    /**
     * 后台页面展示显示
     * @param  Request $request 请求数据    //搜索数据
     * @param  menu  $need    需要请求的链接
     * @return void           view
     */
    public function show(Request $request,$need = '',$subColumn = '')
    {
        $this->check_url($need);
        //登陆验证
        session_start();
        if(isset($_COOKIE['username'])){
            $_SESSION['username'] = $_COOKIE['username'];
        }
        $num = 0;
        if(isset($_SESSION['username'])){
            $num = DB::table('user')->where('username',$_SESSION['username'])->count('id');
            if($num != 1){
                $need = 'login';
            }
        }else{
            $need = 'login';
        }
        if($need == 'login' && $num == 1)
            $need = '';

        //登陆界面
        if($need == 'login' && $num != 1)
            return view('support.login');


        //后端菜单
        $menu = new Menu;
        $menus = $menu->getMenu('0','1','asc');
        $menuName = [];
        foreach ($menus as $value) {
            $menuName[$value->url] = $value->name;          //菜单链接=>菜单名
        }

        if($need == '') $need = $menus[0]->url;

        //搜索
        $view = $need;
        $data = $request->all();
        $search = isset($data['search_content'])?$data['search_content']:'';
        session(['search' => $search]);

        $controllerStr = 'App\Http\Controllers\\'.ucwords($need).'Controller';
        $controller = new $controllerStr;
        //传到common视图数据
        //view 包含的视图文件
        //menuName 菜单url=>name
        //menus 菜单生成 common
        //subColumn 二级菜单显示
        return $controller->show($request,$view,$menus,$menuName,$subColumn,$search);
    }

    /**
     * 检查链接是否存在
     * @param  string $need 请求连接
     * @return true/404       返回会true 定向为404
     */
    public function check_url($need)
    {
        $menu = new Menu;
        $show_menus = $menu->getMenu('0','1','asc');
        $hide_menus = $menu->getMenu('0','0','asc');
        $menu_url = [];
        foreach ($show_menus as $value) {
            $menu_url[] = $value->url;
        }
        foreach ($hide_menus as $value) {
            $menu_url[] = $value->url;
        }
        if(in_array($need, $menu_url) || $need == ''){
            return true;
        }else{
            abort(404);
        }
    }
}
