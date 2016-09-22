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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
