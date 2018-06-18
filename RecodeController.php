<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecodeController extends Controller
{
    public function post(Request $request)
    {
    	$validate_rule = [
    		'target' => 'string', 
    		'memorial_flg' => 'integer', 
    		'size' => 'string', 
    		'img_path1' => 'string', 
    		'img_path2' => 'string', 
    		'img_path3' => 'string', 
    		'recode_id' => 'integer', 
    	];
    	$this->validate($request, $validate_rute);
    	return view();
    }
}
