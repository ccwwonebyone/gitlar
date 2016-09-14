<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function show($need='home')
    {
        //return url('menu/getallData');
    	if($need!='support'){
    		$view = 'support.'.$need;
    		return view('support.common',compact('view'));
    	}else{
    		return view('support.login');
    	}
    	
    }
}
