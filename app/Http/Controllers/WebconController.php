<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class WebconController extends Controller
{
	private $table = 'webcon';
    private $link_table = 'template';
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