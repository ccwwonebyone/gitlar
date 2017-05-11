<?php

namespace App\Http\Controllers;

use App\Http\Controllers\WebsetController as Webset;
use Illuminate\Http\Request;
use App\Http\Requests;

class AlbumController extends Controller
{
    private $belong = 'album';
    /**
     * 展示首页
     * @return void
     */
    public function index()
    {
        //网站配置
        $webset = new Webset;
        $info = $webset->getInfo($this->belong);

        //$ablumHeader['name'] = $indexInfo['menu-header-name'];
        //获取头部信息
        //$ablumHeader['info'] = $this->showInfo('header','ablum');

        $middle['name'] = $info['menu-middle-name'];
        //获取中部信息
        $middle['info'] = $this->showInfo('middle',$this->belong);

        //$ablumFooter['name'] = $indexInfo['menu-footer-name'];
        //获取中部信息
        //$ablumFooter['info'] = $this->showInfo('footer','ablum');

        return view($this->web().'.album',compact('middle'));
    }
}
