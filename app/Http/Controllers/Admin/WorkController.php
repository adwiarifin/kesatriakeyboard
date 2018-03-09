<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JD\Cloudder\Facades\Cloudder;
use App\Work;

class WorkController extends Controller
{

    public function index()
    {
        $works = Work::latest()->paginate(10);
        return view('admin.work.index', compact('works'));
    }

    public function create()
    {
        return view('admin.work.create');
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required',
            'image' => 'required',
        ]);

        // start transaction
        DB::beginTransaction();

        // save string
        $work = new Work();
        $work->name = $request->name;
        $work->slug = str_slug($request->name);
        $work->description = $request->description;
        $work->platform = $request->platform;
        $work->framework = $request->framework;
        $work->save();

        // save image
        $file = $request->file('image');
        if(!is_null($file)){
            Cloudder::upload($file->getRealPath(), null, [], ['work']);
            $work->image = Cloudder::getPublicId();
            $work->update();
        }

        // end transaction
        DB::commit();

        // info message
        session()->flash('message', 'Work has been created');

        // redirect
        return redirect('/admin/works');
    }

    public function edit(Work $work)
    {
        return view('admin.work.edit', compact('work'));
    }

    public function update(Request $request, Work $work)
    {
        // validate
        $this->validate($request, [
            'name' => 'required|min:3',
            'description' => 'required',
        ]);

        // start transaction
        DB::beginTransaction();

        // update string
        if($work->name !== $request->name){
            $work->name = $request->name;
            $work->slug = str_slug($request->name);
        }
        $work->description = $request->description;
        $work->platform = $request->platform;
        $work->framework = $request->framework;
        $work->save();

        // update image
        $file = $request->file('image');
        if(!is_null($file)){
            Cloudder::destroyImage($work->image);
            Cloudder::delete($work->image);

            Cloudder::upload($file->getRealPath(), null, [], ['work']);
            $work->image = Cloudder::getPublicId();
            $work->update();
        }

        // end transaction
        DB::commit();

        // info message
        session()->flash('message', 'Work has been updated');

        // redirect
        return redirect('/admin/works');
    }

    public function destroy(Work $work)
    {
        // remove image
        Cloudder::destroyImage($work->image);
        Cloudder::delete($work->image);

        // remove in database
        $work->delete();

        // info message
        session()->flash('message', 'Work has been deleted');

        // redirect
        return redirect('/admin/works');
    }
}
