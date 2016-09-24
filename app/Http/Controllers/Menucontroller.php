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
    public function menuData($where='',$data,$search)
    {
        if($where!=''){
            $total = DB::table($this->table)->where($where)->count();
            $rows = DB::table($this->table)
                         ->where($where)
                         ->orderBy($data['sort'],$data['order'])
                         ->skip($data['offset'])->take($data['limit'])
                         ->where(function($query) use ($search){
                            $query->orWhere('name','like','%'.$search.'%');
                         })
    					 ->get()->toArray();
        }else{
            $total = DB::table($this->table)->count();
            $rows = DB::table($this->table)
                         ->orderBy($data['sort'],$data['order'])
                         ->skip($data['offset'])->take($data['limit'])
                         ->where(function($query) use ($search){
                            $query->orWhere('name','like','%'.$search.'%');
                         })
                         ->get()->toArray();          
        }
        foreach ($rows as $key=>$row) {
            if($row->pid ==0){
                $rows[$key]->pid_name = '主菜单';
            }else{
                $pid_name = DB::table($this->table)->where('id',$row->pid)->value('name');
                $rows[$key]->pid_name = $pid_name;
            }           
        }
        $menuData['total'] = $total? $total : 0;
        $menuData['rows'] = $rows? $rows :'';
    	return $menuData;
       
    	//return json_encode($menuDatas);
    }
    /**
     * 获取表格数据
     * @param  Request $request 请求参数
     * @return json           json数据
     */
    public function getallData(Request $request)
    {
        $data = $request->all();
        $search = isset($data['search'])?$data['search']:'';
    	echo json_encode($this->menuData('',$data,$search));
    }
    /**
     * 获取所属平台的最大排序
     * @param  Request $request 请求参数
     * @return int           排序
     */
    public function getOrder(Request $request)
    {
        $data = $request->all();
        $belong = $data['belong'];
        $order = DB::table($this->table)->where('belong',$belong)->max('order');
        echo $order+1;
    }
    public function add(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);
        if(DB::table($this->table)->insert($data)){
            return redirect()->back()->withErrors(['保存','成功']);
        }else{
             return redirect()->back()->withErrors(['保存','失败']);
        }
    }
    public function remove(Request $request)
    {
        $data = $request->all();
        $id = $data['id'];
        $ids = explode(',', $id);
        if(DB::table($this->table)->whereIn('id',$ids)->delete()){
            return 'success';
        }else{
            return 'fail';
        }
    }

    public function edit(Request $request)
    {
        $data = $request->all();
        $where['id'] = $data['id'];
        unset($data['id']);
        unset($data['_token']);
        if(DB::table($this->table)->where($where)->update($data)){
            return redirect()->back()->withErrors(['修改','成功']);
        }else{
            return redirect()->back()->withErrors(['修改','失败']);
        }
    }
    public function getMenu($belong,$is_show,$order)
    {
        $where['belong'] = $belong;
        $where['is_show'] = $is_show;
        $data = DB::table($this->table)->where($where)->orderBy('order',$order)->get();
        return $data;
    }
}
