<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ContactController extends Controller
{
    private $contactRule = [                                                //验证规则
                    'type' =>'required|between:1,10',
                    'content' => 'required'
                  ];
    private $types = ['image/jpeg','image/png','image/jpg','image/gif'];
    private $table = 'contact';                                         //数据表
    /**
    * 添加滑块
    *form表单post的值
    * @return void
    */
    public function add(Request $request)
    {
        $this->validate($request,$this->contactRule);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()){
                $belong = $request->input('belong');
                $filename = $file -> getClientOriginalName();
                $type = $file ->getClientMimeType();
                if(!in_array($type, $this->types)) {
                    return redirect()->back()->withErrors(['类型','错误']);
                }
                $fileName = date('YmdHis').$file->getClientOriginalName();
                $file->move(public_path().'/images\/contact\/'.$belong.'\/', $fileName);
                $allImage = 'images/contact/'.$belong.'/'.$fileName;
            }
            $data['img'] = $allImage;
            $data['icon'] = $request->input('icon');
            $data['type'] = $request->input('type');
            $data['content'] = $request->input('content');
            if(DB::table($this->table)->insert($data)){
                return redirect()->back()->withErrors(['保存','成功']);
            }
        }
    }
    /**
     * 页面显示的值
     * @param   string $search 搜索内容
     * @return object         所有属于模块的数据
     */
    public function getInfo($search=null)
    {
        if(!empty($search)){
            $data = DB::table($this->table)->where(function($query) use ($search){
                $query->orWhere('content','like','%'.$search.'%')
                      ->orWhere('type','like','%'.$search.'%');
            })->get();

        }else{
            $data = DB::table($this->table)->get();
        }
        return $data;
    }
    /**
     * 修改滑块 点击按钮/修改内容/修改图片内容
     * @param  Request $request 表单数据
     * @return  json/重定向/重定向
     */
    public function edit(Request $request)
    {
        $data = $request->all();
        unset($data['image']);

        $where['id'] = $data['id'];
        unset($data['id']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()){
                $belong = $request->input('belong');
                $type = $file ->getClientMimeType();
                if(!in_array($type, $this->types)) {
                    return redirect()->back()->withErrors(['类型','错误']);
                }
                $filename = $file -> getClientOriginalName();
                $fileName = date('YmdHis').$file->getClientOriginalName();
                $file->move(public_path().'/images\/contact\/'.$belong.'\/', $fileName);
                $allImage = 'images/contact/'.$belong.'/'.$fileName;
            }
            $data['img'] = $allImage;
        }else{
            $newRule = $this->contactRule;
            if(isset($data['type'])){
                unset($newRule['image']);
                $this->validate($request,$newRule);
            }
        }
        unset($data['_token']);
        if(DB::table($this->table)->where($where)->update($data)){
            if(isset($data['type'])){
                return redirect()->back()->withErrors(['修改','成功']);
            }else{
                return response()->json($data);
            }
        }
    }
    public function remove(Request $request)
    {
        $where = $request->all();
        if(DB::table($this->table)->where($where)->delete()){
            return 1;
        }else{
            return 0;
        }

    }
}
