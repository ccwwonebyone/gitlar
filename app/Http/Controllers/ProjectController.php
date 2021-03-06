<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProsetController as Proset;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ProjectController extends Controller
{
	private $projectRule = [												//验证规则
					'title' =>'required|between:1,10',
    				'content' => 'required'
        		  ];
    private $types = ['image/jpeg','image/png','image/jpg','image/gif'];
    private $projectPro = [
                            'slider'=>'slider',                         //滑块栏
                            'wonder'=>'wonder'
                            ];
    private $table = 'project';											//数据表

    public function show($request,$view,$menus,$menuName,$subColumn,$search)
    {
        $data = $request->all();
        $is_show = isset($data['is_show'])?$data['is_show']:'';

        $proset = new Proset;
        $getProset = $proset->getProset();
        $subMenu = $getProset;
        $projectUrl = array_keys($getProset);
        if(!empty($projectUrl)&&$subColumn == ''){
            $subColumn = $projectUrl[0];
        }
        $info = $this->getInfo($subColumn,$is_show,$search);

        $returnView = view('support.common',compact('view','menus','menuName','subColumn','subMenu','getProset','info'));
        if(isset($search) && $search != ''){
            return $returnView->withErrors(['搜索',$search]);
        }else{
            return $returnView;
        }
    }
    /**
    * 添加滑块
    *form表单post的值
    * @return void
    */
    public function add(Request $request)
    {
    	$this->validate($request,$this->projectRule);
    	if ($request->hasFile('image')) {
    		$files = $request->file('image');
            //多文件上传
            foreach ($files as $file) {
                if ($file->isValid()){
                    $belong = $request->input('belong');
                    $filename = $file -> getClientOriginalName();
                    $type = $file ->getClientMimeType();
                    if(!in_array($type, $this->types)) {
                        return redirect()->back()->withErrors(['类型','错误']);
                    }
                    $fileName = date('YmdHis').$file->getClientOriginalName();
                    $file->move(public_path().'/images/project/'.$belong.'/', DIRECTORY_SEPARATOR === '/' ? $fileName : iconv('UTF-8', 'gb2312', $fileName));
                    $allImage[] = 'images/project/'.$belong.'/'.$fileName;
                }
            }
            $data['img'] = implode(',', $allImage);

            $data['title'] = $request->input('title');
            $data['content'] = $request->input('content');
            $data['is_show'] = $request->input('is_show');
            $data['create_time'] = date('Y-m-d H:i:s');
            $data['belong'] = $belong;
            if(DB::table($this->table)->insert($data)){
                return redirect()->back()->withErrors(['保存','成功']);
            }
		}
    }
    /**
     * 页面显示的值
     * @param   string $view    模块名
     * @param   int $is_show 是否显示 默认为全部
     * @param   string $search 搜索内容
     * @return object         所有属于模块的数据
     */
    public function getInfo($view,$is_show='',$search=null)
    {
    	$where['belong'] = $view;
    	if($is_show!=''){
    		$where['is_show'] = $is_show;
    	}
    	if(!empty($search)){
    		$data = DB::table($this->table)->where($where)->where(function($query) use ($search){
    			$query->orWhere('content','like','%'.$search.'%')
    				  ->orWhere('title','like','%'.$search.'%')
    				  ->orWhere('img','like','%'.$search.'%');
    		})->get();

    	}else{
    		$data = DB::table($this->table)->where($where)->get();
    	}
    	return $data;
    }
    /**
     * 修改滑块 点击按钮/修改内容/修改图片内容
     * @param  Request $request 表单数据
     * @return  json/重定向/重定向
     */
    public function edit(Request $request)
    {
    	$data = $request->all();
    	unset($data['image']);

        $where['id'] = $data['id'];
    	unset($data['id']);

    	if ($request->hasFile('image')) {
    		$files = $request->file('image');
            foreach ($files as $file) {
                if ($file->isValid()){
                    $belong = $request->input('belong');
                    $type = $file ->getClientMimeType();
                    if(!in_array($type, $this->types)) {
                        return redirect()->back()->withErrors(['类型','错误']);
                    }
                    $filename = $file -> getClientOriginalName();
                    $fileName = date('YmdHis').$file->getClientOriginalName();
                    $file->move(public_path().'/images/project/'.$belong.'/', DIRECTORY_SEPARATOR === '/' ? $fileName : iconv('UTF-8', 'gb2312', $fileName));
                    $allImage[] = 'images/project/'.$belong.'/'.$fileName;
                }
            }
            $data['img'] = implode(',', $allImage);
    	}else{
    		$newRule = $this->projectRule;
    		if(isset($data['title'])){
    			unset($newRule['image']);
    			$this->validate($request,$newRule);
    		}
    	}
    	unset($data['_token']);
    	$data['create_time'] = date('Y-m-d H:i:s');
    	if(DB::table($this->table)->where($where)->update($data)){
    		if(isset($data['title'])){
    			return redirect()->back()->withErrors(['修改','成功']);
    		}else{
    			return response()->json($data);
    		}
        }
    }
    public function remove(Request $request)
    {
    	$where = $request->all();
    	if(DB::table($this->table)->where($where)->delete()){
    		return 1;
    	}else{
    		return 0;
    	}

    }
    /*public function search(Request $request)
    {
    	$search = $request->input('search_content');
    	$where['belong'] = $this->projectPro[$view];
    	DB::table($this->db)
    			->where($where)->Where(function ($query) {
                $query->orwhere('content', 'like', '%'.$search.'%')
                	  ->orwhere('img', 'like', '%'.$search.'%')
                      ->orwhere('title', 'like', '%'.$search.'%');
            })
			->get();
    	return redirect()->back()->withErrors($where.':');
    }*/
}
