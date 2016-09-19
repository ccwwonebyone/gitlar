<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ProjectController extends Controller
{
    /**
    * Manage Post Request
    *
    * @return void
    */
    public function addSlider(Request $request)
    {
    	$file = $request->file('image');
    	if ($request->hasFile('image')) {
    		return 11;
		}


    	if ($request->file('image')>isValid()){
    		return 'sadasda';
		}


    	$this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    	return 1;
        $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $imageName);
        
    	/*return back()
    		->with('success','Image Uploaded successfully.')
    		->with('path',$imageName);*/
    }
}
