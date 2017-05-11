<?php

namespace App\Http\Controllers;

use App\Http\Controllers\WebsetController as Webset;
use Illuminate\Http\Request;
use App\Http\Requests;

class BlogController extends Controller
{
    private $belong = 'blog';

    public function index(Request $request)
    {
        $infos = $request->all();
        $id = isset($infos['id'])?$infos['id']:'';
        //网站配置
        $webset = new Webset;
        $info = $webset->getInfo($this->belong);

        $middle['name'] = $info['menu-middle-name'];
        //获取中部信息
        $middle['info'] = $this->showInfo('middle',$this->belong);

        return view($this->web().'.blog',compact('middle','id'));
    }
}
