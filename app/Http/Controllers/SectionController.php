<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index() 
    {
    	$sections = Section::all();
    	return view('admin.section.index', compact('sections'));
    }

    public function edit(Section $section) 
    {
    	return view('admin.section.edit', compact('section'));
    }

    public function update(Request $request, Section $section) 
    {
        // save string data
    	$section->value = $request->value;
    	$section->update();

    	session()->flash('message', 'Section '.$section->key.' has been updated');

        return redirect('/admin/sections');
    }
}
