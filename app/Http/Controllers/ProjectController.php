<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ProjectController extends Controller
{
	private $sliderRule = [												//验证规则
					'title' =>'required|between:1,10',
    				'content' => 'required',
            		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        		  ];
    private $slider = 'slider';											//滑块栏
    private $db = 'project';											//数据表
    /**
    * 添加滑块
    *form表单post的值
    * @return void
    */
    public function addSlider(Request $request)
    {
    		
    	if ($request->hasFile('image')) {
    		$file = $request->file('image');
    		if ($file->isValid()){
    			$filename = $file -> getClientOriginalName();
    			$this->validate($request,$this->sliderRule);   			
    			$fileName = date('YmdHis').$file->getClientOriginalName();
    			$request->file('image')->move(public_path().'/images\/silder\/', $fileName);
    			$data['title'] = $request->input('title');
    			$data['content'] = $request->input('content');
    			$data['is_show'] = $request->input('is_show'); 
    			$data['img'] = 'images/silder/'.$fileName;
    			$data['create_time'] = date('Y-m-d H:i:s');
    			$data['belong'] = $this->slider;
    			if(DB::table($this->db)->insert($data)){
    				return redirect()->back()->withErrors(['保存','成功']);
    			}   			
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
    		$data = DB::table($this->db)->where($where)->where(function($query) use ($search){
    			$query->orWhere('content','like','%'.$search.'%')
    				  ->orWhere('title','like','%'.$search.'%')
    				  ->orWhere('img','like','%'.$search.'%');
    		})->get();

    	}else{
    		$data = DB::table($this->db)->where($where)->get();
    	}    	
    	return $data;
    }
    /**
     * 修改滑块 点击按钮/修改内容/修改图片内容
     * @param  Request $request 表单数据
     * @return  json/重定向/重定向
     */
    public function editSlider(Request $request)
    {
    	$data = $request->all();
    	unset($data['image']);

        $where['id'] = $data['id'];
    	unset($data['id']);

    	if ($request->hasFile('image')) {
    		$file = $request->file('image');
    		if ($file->isValid()){
    			$filename = $file -> getClientOriginalName();
    			$this->validate($request,$this->sliderRule);   			
    			$fileName = date('YmdHis').$file->getClientOriginalName();
    			$request->file('image')->move(public_path().'/images\/silder\/', $fileName);
    			$data['img'] = 'images/silder/'.$fileName;
    		}
    	}else{
    		$newRule = $this->sliderRule;
    		if(isset($data['title'])){
    			unset($newRule['image']);
    			$this->validate($request,$newRule);
    		}
    	}
    	unset($data['_token']);
    	$data['create_time'] = date('Y-m-d H:i:s');
    	if(DB::table($this->db)->where($where)->update($data)){
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
    	if(DB::table($this->db)->where($where)->delete()){
    		return 1;
    	}else{
    		return 0;
    	}

    }
    public function searchSlider(Request $request)
    {
    	$search = $request->input('search_content');
    	$where['belong'] = $this->slider;
    	DB::table($this->db)
    			->where($where)->Where(function ($query) {
                $query->orwhere('content', 'like', '%'.$search.'%')
                	  ->orwhere('img', 'like', '%'.$search.'%')
                      ->orwhere('title', 'like', '%'.$search.'%');
            })
			->get();
    	return redirect()->back()->withErrors($where.':');
    }
}
