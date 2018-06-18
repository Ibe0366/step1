<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function post(Request $request)
    {
    	$validate_rule = [
    		'plan_days' => 'date', 
    		'plan_title' => 'string', 
    		'plan_title' => 'string', 
    		'with_user_id' => 'integer', 
    	];
    	$this->validate($request, $validate_rute);
    	return view();
    }
}
