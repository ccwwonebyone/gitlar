<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
    	$subject = '词条';
    	$details = ['完美','精彩','生活','你想要的','走过的'];
    	$showDetail = $details[0];
    	$showContent = [
    		'title'=>'完美世界',
    		'img'=>asset('images/b1.jpg'),
    		'content'=>'每个人都希望自己能有所作为，能成就一番事业。但这个过程是漫长而艰巨的，挺过来了就是胜利。不是每个人都能风声水起，都能扭转乾坤的。所以当你遭遇挫折和失败的时候，你该怎么做：是不停的抱怨是怨恨他人；怨恨自己；怨恨老天爷不公；是继续坚持还是就此放弃。其实老天爷对每个人都很公平的，机会人人平等就看你是否能抓住。'
    	];
    	return view('blog',compact('subject','details','showDetail','showContent'));
    }
}
