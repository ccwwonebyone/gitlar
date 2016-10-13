<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class LoginController extends Controller
{
	private $rule = ['username' => 'required',
					 'password' => 'required'
					];
	private $table = 'user';

    public function index(Request $request)
    {
        session_start();
    	$this->validate($request,$this->rule);
    	$data = $request->all();
    	$dataDb['username'] = $data['username'];
    	$dataDb['password'] = md5($data['username']);
    	$num = DB::table($this->table)->where($dataDb)->count('id');
    	if($num == 1){
    		$_SESSION['username'] = $dataDb['username'];
            if(isset($data['remember'])){
                setcookie("username", $dataDb['username'], time()+60*60*24*10);
            }
    		return redirect()->route('support',['need' => '']);
    	}else{
    		return redirect()->back()->withErrors('账号或密码错误'); 
    	}
    }
    public function loginOut()
    {
        session_start();       
        if(isset($_COOKIE['username'])){
            setcookie("username",$_SESSION['username'],time()-1);
        } 
        session_unset('username');       
        return redirect()->route('support',['need' => 'login']);
    }
}
