<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\ProjectController as Project;
use App\Http\Controllers\WebsetController as Webset;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showInfo($part,$menu)
    {
        $webset = new Webset;
        $project = new Project;      
        $partInfo = $webset->getInfo($menu);
        $url= DB::table('proset')->where('name',$partInfo['menu-'.$part])->value('url');        
        $info = $project->getInfo($url,1);
        return $info;
    }

    public function web()
    {
       $data = DB::table('company')->leftJoin('web','company.web','=','web.id')->value('web.web_type');
       return $data;
    }
}