<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function show($need='home')
    {
    	$view = 'support.'.$need;
    	return view('support.common',compact('view'));
    	
    }
}
