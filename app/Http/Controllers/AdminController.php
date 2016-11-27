<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController as Menu;
use App\Http\Controllers\ProsetController as Proset;
use App\Http\Controllers\ProjectController as Project;
use App\Http\Controllers\CompanyController as Company;
use App\Http\Controllers\WebsetController as Webset;

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

        $menu = new Menu;
        $project = new Project;
        $webset = new Webset;

        $show_tables = $this->getTables();

        $getProset = $this->getProset();                     //属于project的菜单
        $projectUrl = array_keys($getProset);

        $fontMenu = $menu->getMenu('1','1','asc');
        $fontMenus = [];
        foreach ($fontMenu as $value) {
            $fontMenus[$value->url] = $value->name;          //菜单链接=>菜单名
        }
        $websetUrl = array_keys($fontMenus);

        //后端菜单
        $menus = $menu->getMenu('0','1','asc');
        $menuName = [];
        foreach ($menus as $value) {
            $menuName[$value->url] = $value->name;          //菜单链接=>菜单名
        }

        if($need == ''){
            $need = $menus[0]->url;
        }

        //前端启用菜单
        $view = $need;
        
        $data = $request->all();
        $search = isset($data['search_content'])?$data['search_content']:'';
        session(['search' => $search]);
        $is_show = isset($data['is_show'])?$data['is_show']:'';
        //栏目配置页面
        if($need == 'project'){
            if(!empty($projectUrl)&&$subColumn == ''){
                $subColumn = $projectUrl[0];                           
            }
            $info = $project->getInfo($subColumn,$is_show,$search);  
        }
        //前端菜单页面
        if($need == 'webset'){
            if(!empty($websetUrl)&&$subColumn == ''){
                 $subColumn = $websetUrl[0];                 
            }
            $info = $webset->getInfo($subColumn);
        }
        if($need == 'company'){
            $company = new Company;
            $info = $company -> edit();
            $webs = $company -> web();
        }
        if(isset($search) && $search != ''){
            //传到common视图数据 
            //view 包含的视图文件
            //info 显示数据
            //menuName 菜单url=>name
            //need 菜单中文名,project视图设置归属项
            //menus 菜单生成 common
            //show_tables 所有数据表名 用于菜单管理的选择项
            //fontMenus 前端菜单
            //subColumn 二级菜单显示
            return view('support.common',compact('view','info','menus','menuName','show_tables','getProset','fontMenus','subColumn','webs'))->withErrors(['搜索',$search]);
        }else{
            return view('support.common',compact('view','info','menus','menuName','show_tables','getProset','fontMenus','subColumn','webs'));
        }
          	
    }
    /**
     * 获取当前数据库中的所有表 除去数据库,数据表前缀的影响
     * @return array 数据表数组
     */
    public function getTables()
    {
        $tables = DB::select("show tables");
        $database = env('DB_DATABASE');
        $prefix = config('database.connections.mysql.prefix');
        $show_tables = [];
        foreach ($tables as $table) {
            $table = get_object_vars($table);           //将对象转换为有效数组
            $show_tables[] = str_replace($prefix,'',$table['Tables_in_'.$database]);
        }
        return $show_tables;
    }
    /**
     * 获取proset的菜单
     * @return array 
     */
    public function getProset()
    {
        $prosets = DB::table('proset')->where('is_show',1)->get();
        $proset = array();
        foreach ($prosets as $value) {
            $proset[$value->url] = $value->name;
        }
        return $proset;
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
