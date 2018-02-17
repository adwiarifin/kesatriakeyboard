<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost as Post;
use App\Work;

class FrontController extends Controller
{
    
    public function index()
    {
    	$posts = Post::all();
        $posts = $posts->count() > 3 ? $posts->random(3) : $posts;

        $works = Work::all();
        $works = $works->count() > 3 ? $works->random(3) : $works;
    	
    	return view('front.landing.index', compact('posts', 'works'));
    }

    public function blog($slug)
    {
    	$post = Post::where('slug', $slug)->first();
    	return view('front.blog.show', compact('post'));
    }

    public function portfolio($slug)
    {
        $work = Work::where('slug', $slug)->first();
        return view('front.portfolio.show', compact('work'));
    }
}
