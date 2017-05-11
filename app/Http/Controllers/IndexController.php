<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProjectController as Project;
use App\Http\Controllers\WebsetController as Webset;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


class IndexController extends Controller
{
    private $belong = 'index';
	/**
	 * 展示首页
	 * @return void
	 */
    public function index()
    {
        $project = new Project;
        //滑块专属
        $slides = $project->getInfo('slider',1);
        //网站配置
        $webset = new Webset;
        $info = $webset->getInfo($this->belong);

        //网站背景
        $background = $info['background1'];
        //获取头部信息
        $header['name'] = $info['menu-header-name'];
        $header['info'] = $this->showInfo('header',$this->belong);
        //获取中部信息
        $middle['name'] = $info['menu-middle-name'];
        $middle['info'] = $this->showInfo('middle',$this->belong);
        //获取尾部信息
    	$footer['name'] = $info['menu-footer-name'];
        $footer['info'] = $this->showInfo('footer',$this->belong);

    	return view($this->web().'.index',compact('slides','header','middle','footer','background'));
    }
}
