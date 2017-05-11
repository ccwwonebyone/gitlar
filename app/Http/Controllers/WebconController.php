<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MenuController as Menu;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class WebconController extends Controller
{
	private $table = 'webcon';
    private $link_table = 'template';

    public function show($request,$view,$menus,$menuName,$subColumn,$search)
    {
        $menu = new Menu;
        $fontMenu = $menu->getMenu('1','1','asc');
        $subMenu = [];
        foreach ($fontMenu as $value) {
            $subMenu[$value->url] = $value->name;          //菜单链接=>菜单名
        }

        $webUrl = array_keys($subMenu);
        if(!empty($webUrl)&&$subColumn == ''){
            $subColumn = $webUrl[0];
        }
        $info = $this->getInfo($subColumn);

        $returnView = view('support.common',compact('view','menus','menuName','subMenu','subColumn','info'));
        if(isset($search) && $search != ''){
            return $returnView->withErrors(['搜索',$search]);
        }else{
            return $returnView;
        }
    }
	/**
	 * 获取webset的信息
	 * @param  string $subColumn 属于webcon的菜单链接
	 * @return array         相关链接的webcon信息
	 */
    public function getInfo($subColumn)
    {
    	$menuId = DB::table('menu')->where('url',$subColumn)->value('id');
    	$data = DB::table($this->table)->where('url_id',$menuId)
                ->orderBy('order','asc')
                ->get();
        $data['tpls'] = $this->getTpl();
        /*print_r($data);
        exit;*/
    	return $data;
    }
    /**
     * 获取所有的模板
     * @return array 模板数组 array(0=>object)
     */
    public function getTpl()
    {
        $tpls = DB::table($this->link_table)->get();
        $tpl = array();
        foreach ($tpls as $value) {
            $tpl[$value->id] = $value->name;
        }
        return $tpl;
    }
}
