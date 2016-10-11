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

        return view('album',compact('middle'));
    }

    /*public function index()
    {
    	$project = '精彩展示';
    	$brilliants = [
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a1.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a2.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a3.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a4.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a5.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a6.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a7.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a8.jpg')],
    		['title'=>'精致生活',
    		 'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。',
    		 'img'=>asset('images/a9.jpg')]
    	];
    	return view('album',compact('project','brilliants'));
    }*/
}
