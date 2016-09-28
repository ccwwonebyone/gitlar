<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController as Menu;
use App\Http\Controllers\ProsetController as Proset;
use App\Http\Controllers\ProjectController as Project;
use App\Http\Controllers\CompanyController as Company;

class AdminController extends Controller
{
    /**
     * 后台页面展示显示
     * @param  Request $request 请求数据    //搜索数据
     * @param  menu  $need    需要请求的链接
     * @return void           view
     */
    public function show(Request $request,$need='home')
    {
        $menu = new Menu;
        $project = new Project;

        $show_tables = $this->getTables();
        $getProset = $this->getProset();                     //属于project的菜单

        $projectUrl = array_keys($getProset);

        $menus = $menu->getMenu('0','1','asc');
        $fontMenus = $menu->getMenu('1','1','asc');
        $menuName = [];
        foreach ($menus as $value) {
            $menuName[$value->url] = $value->name;          //菜单链接=>菜单名
        }
        $menuName = array_merge($menuName,$getProset);     
        $view = $need;
        if($need=='login') 
            return view('support.login');
                                                  
        if(in_array($need, $projectUrl) || $need == 'project'){
            $view = 'project';          //需要显示的页面            
            $data = $request->all();
            if($need == 'project' && !empty($projectUrl)){
                $need = $projectUrl[0];
            }
            $search = isset($data['search_content'])?$data['search_content']:'';
            session(['search' => $search]);
            $is_show = isset($data['is_show'])?$data['is_show']:'';
            $info = $project->getInfo($need,$is_show,$search);
        }

        if($need=='company'){
            $company = new Company;
            $info = $company -> edit();
        }
        if(isset($search) && $search!=''){
            //传到common视图数据 
            //view 包含的视图文件    由于project 视图的复用 不能使view等同于need
            //info project 显示数据
            //menuName 菜单url=>name
            //need 菜单中文名,project视图设置归属项
            //show_tables 所有数据表名 用于菜单管理的选择项
            //menus 菜单列表用于生成菜单 common
            //fontMenus 前端菜单
            return view('support.common',compact('view','info','menuName','need','show_tables','menus','getProset','fontMenus'))
                    ->withErrors(['搜索',$search]);
        }else{
            return view('support.common',compact('view','info','menuName','need','show_tables','menus','getProset','fontMenus'));
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
            $table = get_object_vars($table);
            $show_tables[] = str_replace($prefix,'',$table['Tables_in_'.$database]);
        }
        return $show_tables;
    }
    /**
     * 获取属于project数据表的菜单
     * @return array 
     */
    public function getProMenu()
    {
        $proMenus = DB::table('menu')->select('url')->where('table','project')->get();
        $proMenu = array();
        foreach ($proMenus as $value) {
            $proMenu[] = $value->url;
        }
        return $proMenu;
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
}
