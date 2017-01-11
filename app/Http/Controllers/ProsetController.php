<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ProsetController extends Controller
{
	private $prosetRule = [												//验证规则
					'name' =>'required',
    				'url' => 'required',
        		  ];

    private $table = 'proset';

    public function show($request,$view,$menus,$menuName,$subColumn,$search)
    {
        $subMenu = $this->getProset();
        $returnView = view('support.common',compact('view','menus','menuName','subMenu','subColumn'));
        if(isset($search) && $search != ''){
            return $returnView->withErrors(['搜索',$search]);
        }else{
            return $returnView;
        }
    }

    /**
     * 获取proset的菜单
     * @return array
     */
    public function getProset()
    {
        $prosets = DB::table($this->table)->where('is_show',1)->get();
        $proset = array();
        foreach ($prosets as $value) {
            $proset[$value->url] = $value->name;
        }
        return $proset;
    }
	/**
	 * 获取需要的菜单数据
	 * @param  string/array $where 查询条件
	 * @param  array $data  分页请求数据
	 * @return array           数据集合
	 */
    public function prosetData($where='',$data,$search)
    {
        $init_db = DB::table($this->table);

        $init_db = $where!='' ? $init_db->where($where) : $init_db;
        $total = $init_db->count();
        $rows  = $init_db->orderBy($data['sort'],$data['order'])
                         ->skip($data['offset'])->take($data['limit'])
                         ->where(function($query) use ($search){
                            $query->orWhere('name','like','%'.$search.'%');
                         })
                         ->get()->toArray();
        $prosetData['total'] = $total? $total : 0;
        $prosetData['rows'] = $rows? $rows :'';
    	return $prosetData;
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
    	echo json_encode($this->prosetData('',$data,$search));
    }
	/**
	 * 增加proset
	 * @param Request $request 请求参数
	 * @return void
	 */
    public function add(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        unset($data['id']);
        $this->validate($request,$this->prosetRule);
        if(DB::table($this->table)->insert($data)){
            return redirect()->back()->withErrors(['保存','成功']);
        }else{
             return redirect()->back()->withErrors(['保存','失败']);
        }
    }
    /**
     * 删除proset
     * @param  Request $request 请求参数
     * @return void
     */
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
    /**
     * 编辑proset
     * @param  Request $request 请求参数
     * @return void
     */
    public function edit(Request $request)
    {
        $data = $request->all();
        $where['id'] = $data['id'];
        unset($data['id']);
        unset($data['_token']);
        $this->validate($request,$this->prosetRule);
        if(DB::table($this->table)->where($where)->update($data)){
            return redirect()->back()->withErrors(['修改','成功']);
        }else{
            return redirect()->back()->withErrors(['修改','失败']);
        }
    }
}
