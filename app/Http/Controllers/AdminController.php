<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController as Project;

class AdminController extends Controller
{
    public function show(Request $request,$need='home')
    {
        //return url('menu/getallData');
        $project = new Project;
    	if($need!='login'){
    		$view = 'support.'.$need;
            if($need == 'slider'){
                $search = $request->input('search_content');
                $is_show = isset($_GET['is_show'])?$_GET['is_show']:'';
                $info = $project->getInfo($need,$is_show,$search);
            }
            if(isset($search)){
                return view('support.common',compact('view','info'))->withErrors(['搜索',$search]);
            }else{
                return view('support.common',compact('view','info'));
            }
    		
    	}else{
    		return view('support.login');
    	}
    	
    }
}
