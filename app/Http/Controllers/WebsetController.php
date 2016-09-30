<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
class WebsetController extends Controller
{
	private $table = 'webset';
	private $imageRule = ['background1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
						  'background2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480'
						 ];
	/**
	 * 获取webset的信息
	 * @param  string $subColumn 属于webset的id的菜单链接
	 * @return array         相关链接的webset信息   
	 */
    public function getInfo($subColumn)
    {
    	$menuId = DB::table('menu')->where('url',$subColumn)->value('id');
    	$data = DB::table($this->table)->where('menu-belong',$menuId)->first();
    	$data = get_object_vars($data);
    	foreach ($data as $key => $value) {
    		$info = array('','');
    		if($key!='id'&&$key!='menu-belong'&&$key!='background'){
    			if($value!=''){
    				$info = explode(',', $value);
    				$data[$key] = $info[0];
    				$data[$key.'-name'] = $info[1];
    			}else{
    				$data[$key.'-name'] = '';
    			}
    			
    		}
    		if($key=='background'){
    			if($value!=''){
    				$info = explode(',', $value);
    				$data[$key.'1'] = $info[0];
    				if($info[1]==''){
    					$data[$key.'2'] = null;
    				}else{
    					$data[$key.'2'] = $info[1];
    				}   				
    				unset($data[$key]);
    			}else{
    				$data[$key.'1'] = null;
    				$data[$key.'2'] = null;
    			}
    		}
    	}
    	return $data;
    }
    /**
     * 编辑修改网站配置
     * @param  Request $request 配置数据
     * @return viod           
     */
    public function edit(Request $request)
    {
    	$data = $request->all();
    	$where['id'] = $data['id'];
    	$where['menu-belong'] = $data['menu-belong'];
    	if($data['is_change1'] == 'remove' && $data['is_change2'] == 'remove'){
    		$saveData['background'] = '';
    	}
    	if($data['is_change2'] == 'remove' && $data['is_change1'] != 'remove'){
    		$saveData['background'] = $data['background1'].',';
    	}
    	if($request->hasFile('image1') && !$request->hasFile('image2')){
    		$this->validate($request,['image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480']);
    		$file = $request->file('image1');
    		if ($file->isValid()){
    			$filename = $file -> getClientOriginalName();   			
    			$fileName = date('YmdHis').$file->getClientOriginalName();
    			$request->file('image1')->move(public_path().'/images\/webset\/'.$where['menu-belong'].'\/', $fileName);
    			$image['background1'] = 'images/webset/'.$where['menu-belong'].'/'.$fileName;
    		}
    	} 
    	if($request->hasFile('image2')){
    		if($data['is_change1'] != 'unchange'){
    			$this->validate($request,['image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480']
    						  );
    			$file = $request->file('image1');
    			if ($file->isValid()){
    				$filename = $file -> getClientOriginalName();   			
    				$fileName = date('YmdHis').$file->getClientOriginalName();
    				$request->file('image1')->move(public_path().'/images\/webset\/'.$where['menu-belong'].'\/', $fileName);
    				$image['background1'] = 'images/webset/'.$where['menu-belong'].'/'.$fileName;
    			}   			
    		}
    		$file = $request->file('image2');
    		$this->validate($request,['image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480']);
    		if ($file->isValid()){
    			$filename = $file -> getClientOriginalName();   			
    			$fileName = date('YmdHis').$file->getClientOriginalName();
    			$request->file('image2')->move(public_path().'/images\/webset\/'.$where['menu-belong'].'\/', $fileName);
    			$image['background2'] = 'images/webset/'.$where['menu-belong'].'/'.$fileName;    			
    		}    			
    	}
    	if(isset($image['background1']) && !isset($image['background2'])){
    		$saveData['background'] = $image['background1'].',';
    	}
    	if(isset($image['background2'])){
    		if($data['is_change1'] != 'unchange'){
    			$saveData['background'] = $image['background1'].','.$image['background2'];
    		}else{
    			$saveData['background'] = $data['background1'].','.$image['background2'];
    		}
    		
    	}
    	$saveData['menu-header'] =  $data['menu-header'].','.$data['menu-header-name'];
    	$saveData['menu-middle'] =  $data['menu-middle'].','.$data['menu-middle-name'];
    	$saveData['menu-footer'] =  $data['menu-footer'].','.$data['menu-footer-name'];

    	if(DB::table($this->table)->where($where)->update($saveData)){
    		return redirect()->back()->withErrors(['保存','成功']);   		        
        }else{
        	return redirect()->back()->withErrors(['保存','失败']);
        }
    }
}
