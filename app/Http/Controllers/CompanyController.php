<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Storage;
use DB;

class CompanyController extends Controller
{
    private $db = 'company';
    private $sliderRule = [                                             //验证规则
                    'name' =>'required|between:1,10'
                  ];
    public function show($request,$view,$menus,$menuName,$subColumn,$search)
    {
        $info = $this -> edit();
        $webs = $this -> web();
        $returnView = view('support.common',compact('view','menus','menuName','subColumn','info','webs'));
        if(isset($search) && $search != ''){
            return $returnView->withErrors(['搜索',$search]);
        }else{
            return $returnView;
        }
    }

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
        //可能会删除的文件
        $remove_file = DB::table($this->db)->where($where)->value('background');
        unset($data['id']);
        unset($data['_token']);
        $this->validate($request,$this->sliderRule);
        $check_img = ['background'];
        //当有背景时
        foreach ($check_img as $value) {
            if($request->hasFile($value)){
                $this->validate($request,[$value => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480']);
                $file = $request->file($value);
                if ($file->isValid()){
                    $fileName = date('YmdHis').$value.$file->getClientOriginalName();
                    $file->move(public_path('images'),DIRECTORY_SEPARATOR === '/' ? $fileName : iconv('UTF-8', 'gb2312', $fileName));
                    if($value!='background'){
                        $contact = explode('_', $value)[0];
                        $data[$contact] .=',images/'.$fileName;
                    }else{
                        $data[$value] = 'images/'.$fileName;
                    }
                }
            }
        }
        if($data['is_change'] == 'remove'){
            $data['background'] = '';
        }
        unset($data['is_change']);
        if(DB::table($this->db)->where($where)->update($data)){
            return redirect()->back()->withErrors(['保存','成功',public_path($remove_file)]);
        }else{
            return redirect()->back()->withErrors(['保存','失败']);
        }

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
