<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost as Post;

class FrontController extends Controller
{
    
    public function index()
    {
    	$posts = Post::all();
    	if($posts->count() > 3)
    	{
    		$posts = $posts->random(3);
    	}
    	return view('front.landing.index', compact('posts'));
    }

    public function blog($slug)
    {
    	$post = Post::where('slug', $slug)->first();
    	return view('front.blog.index', compact('post'));
    }
}
