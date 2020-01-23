<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\BlogPost as Post;
use App\Work;
use App\Message;
use App\Mail\MessageNew;

/**
 * WebController is Routing used for public faced web
 */
class WebController extends Controller
{
    /**
     * Showing landing page with posts and works
     *
     * @return view
     */
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();

        $works = Work::all();
        $works = $works->count() > 3 ? $works->random(3) : $works;
        
        return view('front.landing.index', compact('posts', 'works'));
    }

    /**
     * Showing list of posts
     *
     * @return view
     */
    public function blogList()
    {
        $posts = Post::latest()->paginate(10);
        return view('front.blog.index', compact('posts'));
    }

    /**
     * Showing single post
     * redirect if post not found
     *
     * @return view
     */
    public function blog($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if ($post === null) {
            return redirect('/blog');
        }
        return view('front.blog.show', compact('post'));
    }

    /**
     * Showing list of works
     *
     * @return view
     */
    public function portfolioList()
    {
        $works = Work::all();
        return view('front.portfolio.index', compact('works'));
    }

    /**
     * Showing single work
     *
     * @return view
     */
    public function portfolio($slug)
    {
        $work = Work::where('slug', $slug)->first();
        if ($work === null) {
            return redirect('/portfolio');
        }
        return view('front.portfolio.show', compact('work'));
    }

    /**
     * Post a comment
     *
     * @return view
     */
    public function postMessage(Request $request)
    {
        $result = array('code' => 0, 'message' => 'Error');

        if ($request->robot === 'on') {
            $message = new Message();
            $message->name = $request->name;
            $message->email = $request->email;
            $message->content = $request->content;
            $message->save();

            // send mail
            $mail = new MessageNew($message);
            Mail::queue($mail);

            $result['code'] = 1;
            $result['message'] = 'Message has been sent';
        } else {
            $result['message'] = 
                'Please check i am not robot, to ensure that u are human!';
            return $result;
        }

        return $result;
    }
}
