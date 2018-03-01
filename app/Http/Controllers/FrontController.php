<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost as Post;
use App\Work;
use App\Message;

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

    public function blogList()
    {
        $posts = Post::latest()->paginate(10);
        return view('front.blog.index', compact('posts'));
    }

    public function blog($slug)
    {
    	$post = Post::where('slug', $slug)->first();
        if ($post === null) {
            return redirect('/blog');
        }
    	return view('front.blog.show', compact('post'));
    }

    public function portfolioList()
    {
        $works = Work::all();
        return view('front.portfolio.index', compact('works'));
    }

    public function portfolio($slug)
    {
        $work = Work::where('slug', $slug)->first();
        return view('front.portfolio.show', compact('work'));
    }

    public function postMessage(Request $request)
    {
        $result = array('code' => 0, 'message' => 'Error');

        if ($request->robot === 'on') 
        {
            $message = new Message();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->content = $request->content;
            $message->save();

            $result['code'] = 1;
            $result['message'] = 'Message has been sent';
        } else {
            $result['message'] = 'Please check i am not robot, to ensure that u are human!';
            return $result;
        }

        return $result;
    }
}
