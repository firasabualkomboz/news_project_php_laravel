<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use App\ContentSocial;
use Illuminate\Http\Request;


class ContentSocialController extends Controller
{

    public function index()
    {
        $contentSocial = ContentSocial::all();
        return view("dashboard.ContentSocial.ContentSocial",compact('contentSocial'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:content_socials|max:255',
            'url' => 'required',
        ]);

        ContentSocial::create([
            'name'  => $request-> name,
            'url'  => $request-> url,

        ]);


        return redirect()->back()->with('msg','Added Seccesfully 😀');
    }

    public function show(ContentSocial $contentSocial)
    {
        //
    }


    public function edit(ContentSocial $contentSocial)
    {
        //
    }

    public function update(Request $request, ContentSocial $contentSocial)
    {
        //
    }

    public function destroy($id)
    {

        $contentSocial = ContentSocial::findorFail($id);
        $contentSocial->delete();
        return redirect()->back()->with('msg_delete','Deteted Seccesfully 🥺');
    }
}
