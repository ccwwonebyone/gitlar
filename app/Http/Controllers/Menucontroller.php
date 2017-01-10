<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class Menucontroller extends Controller
{
    private $menuRule = [                                                //验证规则
                    'name' =>'required|between:1,10',
                    'url' => 'required',
                  ];

	private $table = 'menu';


    public function show($request,$view,$menus,$menuName,$getProset,$fontMenus,$subColumn,$search)
    {
        $show_tables = $this->getTables();
        $returnView = view('support.common',compact('view','menus','menuName','show_tables','getProset','fontMenus','subColumn'));
        if(isset($search) && $search != ''){
            return $returnView->withErrors(['搜索',$search]);
        }else{
            return $returnView;
        }
    }

	/**
	 * 获取需要的菜单数据
	 * @param  string/array $where 查询条件
	 * @param  array $data  分页请求数据
	 * @return array           数据集合
	 */
    public function menuData($where='',$data,$search)
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
        $this->validate($request,$this->menuRule);
        $websetId = DB::table($this->table)->insertGetId($data);
        if($websetId){
            DB::table('webset')->insert(['menu-belong'=>$websetId]);
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
            DB::table('webset')->whereIn('menu-belong',$ids)->delete();
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
        $this->validate($request,$this->menuRule);


        if(DB::table($this->table)->where($where)->update($data)){
        //if(DB::table($this->table)->where($where)->increment('pid', 5)){
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
}
