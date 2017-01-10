<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class ServerController extends Controller
{
	private $table = 'webcon';
    private $link_table = 'template';

    public function show($request,$view,$menus,$menuName,$getProset,$fontMenus,$subColumn,$search)
    {
        $returnView = view('support.common',compact('view','menus','menuName','getProset','fontMenus','subColumn'));
        if(isset($search) && $search != ''){
            return $returnView->withErrors(['搜索',$search]);
        }else{
            return $returnView;
        }
    }
}