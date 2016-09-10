<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class Menucontroller extends Controller
{
	private $table = 'menu';
	/**
	 * 获取需要的菜单数据
	 * @param  array $is_show 是否显示 0,1 0隐藏 1显示
	 * @param  array $belong  归属0,1  1前端 0后台
	 * @return object           数据集合
	 */
    public function menuData($belong=array(0,1),$is_show=array(0,1))
    {

    	$menuData = DB::table($this->table)
    					 ->whereBetween('belong',$belong)
    					 ->whereBetween('is_show',$is_show)
    					 ->get()->toArray();
    	return $menuData;
    	//return json_encode($menuDatas);
    }
    public function getallData()
    {
    	echo json_encode($this->menuData());
    }
   /* public function index()
    {
    	
    }*/
}
