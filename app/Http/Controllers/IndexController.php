<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProjectController as Project;
use App\Http\Controllers\WebsetController as Webset;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


class IndexController extends Controller
{
    private $belong = 'webset';
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
        $info = $webset->getInfo('index');

        $header['name'] = $info['menu-header-name'];
        //获取头部信息
        $header['info'] = $this->showInfo('header','index');

        $middle['name'] = $info['menu-middle-name'];
        //获取中部信息
        $middle['info'] = $this->showInfo('middle','index');

    	$footer['name'] = $info['menu-footer-name'];
        //获取中部信息
        $footer['info'] = $this->showInfo('footer','index');

    	return view('index',compact('slides','header','middle','footer'));
    }

}
