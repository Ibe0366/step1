<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function post(Request $request)
    {
    	$validate_rule = [
    		'name' => 'string', 
    	];
    	$this->validate($request, $validate_rute);
    	return view();
    }
}
