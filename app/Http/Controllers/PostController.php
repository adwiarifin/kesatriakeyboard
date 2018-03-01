<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use JD\Cloudder\Facades\Cloudder;
use App\BlogPost as Post;
use App\BlogCategory as Category;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required',
        ]);

        // start transaction
        DB::beginTransaction();

        // get additional
        $user = auth()->user();
        $category = Category::find($request->category);

        // save string
        $post = new Post();
        $post->image = '';
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->body = $request->body;
        $post->published_at = now();
        $post->category()->associate($category);
        $post->user()->associate($user);
        $post->save();

        // save image
        $file = $request->file('image');
        if(!is_null($file)){
            // $path = $file->store('public/files');
            // $post->image = $path;
            // $post->update();
            Cloudder::upload($file->getRealPath(), null, [], ['post']);
            $post->image = Cloudder::getPublicId();
            $post->update();
        }

        // end transaction
        DB::commit();

        // info message
        session()->flash('message', 'Post has been created');

        // redirect
        return redirect('/admin/posts');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function update(Post $post, Request $request)
    {
        // validate
        $this->validate($request, [
            'title' => 'required|min:3',
            'body' => 'required',
        ]);

        // start transaction
        DB::beginTransaction();

        // get additional
        $category = Category::find($request->category);

        // update string
        if ($post->title !== $request->title) {
            $post->title = $request->title;
            $post->slug = str_slug($request->title);
        }
        $post->body = $request->body;
        $post->category()->associate($category);
        $post->update();

        // update image
        $file = $request->file('image');
        if(!is_null($file)){
            // Storage::delete($post->image);

            // $path = $file->store('public/files');
            // $post->image = $path;
            // $post->update();

            Cloudder::destroyImage($post->image);
            Cloudder::delete($post->image);

            Cloudder::upload($file->getRealPath(), null, [], ['post']);
            $post->image = Cloudder::getPublicId();
            $post->update();
        }

        // end transaction
        DB::commit();

        // info message
        session()->flash('message', 'Post has been updated');

        // redirect
        return redirect('/admin/posts');
    }

    public function destroy(Post $post)
    {
        // remove image
        //Storage::delete($post->image);
        Cloudder::destroyImage($post->image);
        Cloudder::delete($post->image);

        // remove in database
        $post->delete();

        // info message
        session()->flash('message', 'Post has been deleted');

        // redirect
        return redirect('/admin/posts');
    }
}
