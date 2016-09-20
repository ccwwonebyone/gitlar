<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController as Project;

class AdminController extends Controller
{
    public function show($need='home')
    {
        //return url('menu/getallData');
        $project = new Project;
    	if($need!='support'){
    		$view = 'support.'.$need;
            if($need == 'slider'){
                $info = $project->getInfo($need);
            }           
    		return view('support.common',compact('view','info'));
    	}else{
    		return view('support.login');
    	}
    	
    }
}
