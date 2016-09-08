<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlbumController extends Controller
{
    public function index()
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
    }
}
