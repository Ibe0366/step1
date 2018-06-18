<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function post(Request $request)
    {
    	$validate_rule = [
    		'name' => 'string', 
    		'profile' => 'string', 
    		'specialty' => 'string', 
    		'genre' => 'integer', 
    		'record' => 'inter', 
    		'img_path' => 'string', 
    		'mail_flg' => 'integer', 
    	];
    	$this->validate($request, $validate_rute);
    	return view();
    }
}
