<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController as menu;
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
        $show_tables = $this->getTables();

        $projectMenu = ['slider','wonder'];                     //属于project的菜单
        //return url('menu/getallData');
        
        $menu = new menu;
        $menus = $menu->getMenu('0','1','asc');
        $menuName = [];
        foreach ($menus as $value) {
            $menuName[$value->url] = $value->name;          //菜单链接=>菜单名
        }

        $project = new Project;
        $view = $need;                                          //需要显示的页面
    	if($need!='login'){
            if(in_array($need, $projectMenu)){
                $view = 'project';             
                $data = $request->all();
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
                return view('support.common',compact('view','info','menuName','need','show_tables','menus'))->withErrors(['搜索',$search]);
            }else{
                return view('support.common',compact('view','info','menuName','need','show_tables','menus'));
            }
    		
    	}else{
    		return view('support.login');
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
}
