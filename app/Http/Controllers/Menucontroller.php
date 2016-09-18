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
	 * @param  string/array $where 查询条件
	 * @param  array $data  分页请求数据
	 * @return array           数据集合
	 */
    public function menuData($where='',$data)
    {
        if($where!=''){
            $total = DB::table($this->table)->where($where)->count();
            $rows = DB::table($this->table)
                         ->where($where)
                         ->orderBy($data['sort'],$data['order'])
                         ->skip($data['offset'])->take($data['limit'])
    					 ->get()->toArray();
        }else{
            $total = DB::table($this->table)->count();
            $rows = DB::table($this->table)
                         ->orderBy($data['sort'],$data['order'])
                         ->skip($data['offset'])->take($data['limit'])
                         ->get()->toArray();          
        }
        foreach ($rows as $key => $row) {
            if($row['pid']==0){
                $rows[$key]['pid_name'] = '主菜单';
            }else{
                $pid_name = DB::table($this->table)->select('name')->where('id',$row['pid'])->get()->toArray();
                $rows[$key]['pid_name'] = $pid_name;
            }           
        } 
        $menuData['total'] = $total? $total : 0;
        $menuData['rows'] = $rows? $rows :'';
    	return $menuData;
       
    	//return json_encode($menuDatas);
    }
    public function getallData()
    {
        $data = $_GET;
    	echo json_encode($this->menuData('',$data));
    }
}
