<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProjectController as Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


class IndexController extends Controller
{
	/**
	 * 展示首页
	 * @return void 
	 */
    public function index()
    {
        $project = new Project;
        $slides = $project->getInfo('slider',1);
    	$company = [
    		'top' => ['title' => '简介',
    				  'content' => '爱家智能家居主营智能家居产品、电动窗帘、报警系统、监控系统、智能灯光、弱电工程、电动卷帘窗等。在智能家居行业，公司秉承“保证一流质量，保持一级信誉”的经营理念，坚持“客户第一”的原则为广大客户提供优质的服务。欢迎来电洽谈业务！'],
    		'buttom' =>['title' => '简介',
    				  'content' => '爱家智能家居主营智能家居产品、电动窗帘、报警系统、监控系统、智能灯光、弱电工程、电动卷帘窗等。在智能家居行业，公司秉承“保证一流质量，保持一级信誉”的经营理念，坚持“客户第一”的原则为广大客户提供优质的服务。欢迎来电洽谈业务！',
    				  'img'=>asset('images/3.jpg')],
    	];
    	$picture = [
    		'company' => [
    			asset('images/ic.png'),
    			asset('images/ic1.png'),
    			asset('images/ic2.png'),
    			asset('images/ic3.png')
    		]
    	];
    	$project = '服务项目';
    	$pros = [
    		['title' => '精致生活',
    		'content' =>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		'img' =>asset('images/te.jpg'),
    		'url' =>'#'],
    		['title' => '精致生活',
    		'content' =>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		'img' =>asset('images/te1.jpg'),
    		'url' =>'#'],
    		['title' => '精致生活',
    		'content' =>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		'img' =>asset('images/te2.jpg'),
    		'url' =>'#'],
    		['title' => '精致生活',
    		'content' =>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		'img' =>asset('images/te3.jpg'),
    		'url' =>'#'] 
    	];
    	return view('index',compact('slides','menus','company','picture','project','pros','companyInfo'));
    }
}
