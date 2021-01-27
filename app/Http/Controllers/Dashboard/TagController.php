<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('dashboard.tag.index')->with('tags',Tag::all());
    }


    public function create()
    {
        return view('dashboard.tag.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'tag' => 'required'
        ]);

        Tag::create([
            'tag' => $request->tag
        ]);

          return redirect()->back()->with('msg','added seccesfully');
    } // end store functions


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('dashboard.tag.edit')
        ->with('tag',$tag);
    }


    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->tag = $request ->tag;
        $tag->save();
        return redirect()->route('dashboard.tag.index');
    }


    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('dashboard.tag.index');
    }
}
