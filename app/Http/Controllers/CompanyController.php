<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class CompanyController extends Controller
{
    private $db = 'company';
    private $sliderRule = [                                             //验证规则
                    'name' =>'required|between:1,10'
                  ];

    public function web()
    {
         $data = DB::table('web')->get();
         if($data == '')
            return false;

         foreach ($data as $value) {
             $webs[$value->id] = $value->web_type;
         }
         return $webs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $where['id'] = $data['id'];
        unset($data['id']);
        unset($data['_token']);
        $this->validate($request,$this->sliderRule);       
        $check_img = ['qq_img','tel_img','sina_img','weixin_img','background'];
        //当有背景时
        foreach ($check_img as $value) {
            if($request->hasFile($value)){
                $this->validate($request,[$value => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480']);
                $file = $request->file($value);
                if ($file->isValid()){              
                    $fileName = date('YmdHis').$value.$file->getClientOriginalName();
                    $file->move(public_path().'/images\/', $fileName);
                    if($value!='background'){
                        $contact = explode('_', $value)[0];
                        $data[$contact] .=',images/'.$fileName;
                    }else{
                        $data[$value] = 'images/'.$fileName;
                    }                    
                }
            }
        }
        /*if($request->hasFile('background')){
            $this->validate($request,['background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480']);
            $file = $request->file('background');
            if ($file->isValid()){              
                $fileName = date('YmdHis').$file->getClientOriginalName();
                $file->move(public_path().'/images\/', $fileName);
                $data['background'] = 'images/'.$fileName;
            }
        }*/
        $check_change = ['qq_change','tel_change','sina_change','weixin_change'];
        foreach ($check_change as $value) {
            if($data[$value]!='remove'&&$data[$value]!='change'){
                $contact = explode('_', $value)[0];
                $data[$contact] .= ','.$data[$value];
            }
        }
        if($data['is_change'] == 'remove'){
            $data['background'] = '';
        }
        $is_change = $data['is_change'];

        unset($data['is_change']);
        unset($data['qq_img']);
        unset($data['sina_img']);
        unset($data['tel_img']);
        unset($data['weixin_img']);
        unset($data['qq_change']);
        unset($data['weixin_change']);
        unset($data['tel_change']);
        unset($data['sina_change']);
        if(DB::table($this->db)->where($where)->update($data)){
             return redirect()->back()->withErrors(['保存','成功']);
        }else{
            return redirect()->back()->withErrors(['保存','失败']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * 显示公司信息
     *
     * @return object 公司信息
     */
    public function edit()
    {
        $data = DB::table($this->db)->first();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
