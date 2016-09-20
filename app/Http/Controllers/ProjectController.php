<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ProjectController extends Controller
{
	private $sliderRule = [
					'title' =>'required|between:1,10',
    				'content' => 'required',
            		'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        		  ];
    private $slider = 'slider';
    private $db = 'project';
    /**
    * Manage Post Request
    *
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
    				return redirect()->back()->withErrors('滑块以保存！');;
    			}   			
			}
		}
    }

    public function getInfo($view,$is_show='')
    {
    	$where['belong'] = $view;
    	if($is_show!=''){
    		$where['is_show'] = $is_show;
    	}
    	$data = DB::table($this->db)->where($where)->get();
    	return $data;
    }

    public function editSlider(Request $request)
    {
    	$data = $request->all();
        $where['id'] = $data['id'];
    	unset($data['id']);
    	if(DB::table($this->db)->where($where)->update($data)){
            return response()->json($data);
        }
    }
}
