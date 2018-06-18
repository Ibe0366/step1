<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function post(Request $request)
    {
    	$validate_rule = [
    		'title' => 'string', 
    		'news_story' => 'integer', 
    		'categories' => 'string', 
    		'blog_id' => 'integer', 
    	];
    	$this->validate($request, $validate_rute);
    	return view();
    }
}
