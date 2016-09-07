<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


class IndexController extends Controller
{
	/**
	 * 展示首页
	 * @return void [description]
	 */
    public function index()
    {
    	$dbcom = DB::table('company')->first();
    	$companyInfo = ['name'=>$dbcom->name,'create_time'=>$dbcom->create_time];
    	$menus = [
    		['url' => action('IndexController@index'),
    		 'menu' => '主页'],
    	];
    	$slides = [
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。不是每个人都能风声水起，都能扭转乾坤的。所以当你遭遇挫折和失败的时候，你该怎么做：是不停的抱怨是怨恨他人；怨恨自己；怨恨老天爷不公；是继续坚持还是就此放弃。其实老天爷对每个人都很公平的，机会人人平等就看你是否能抓住。'],
    		['title'=>'追求卓越',
    		 'content'=>'卓越不是一个标准，而是一种境界。它不是优秀，它是优秀中的最优。卓越是一种追求，它在于将自身的优势、能力，以及所能使用的资源，发挥到极致的一种状态。'],
    		['title'=>'完美人生',
    		 'content'=>'有一种感觉叫幸福,有一种付出叫拥有,有一种信仰叫宽容,有一种曲折叫人生,有一种约定叫缘分,有一种诺言叫奉献,有一种永恒叫厮守,有一种习惯叫爱情。']
    	];
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
