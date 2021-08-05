<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view ('dashboard.post.index',compact('categories'))->with('posts',Post::all());
    }

    public function create()

    {

        $categories = Category::all();
        if ($categories->count() ==0){return redirect()->route('dashboard.category.create');} //check has category

        $tags = Tag::all();
        if($tags->count() == 0){return redirect()->route('dashboard.tag.create');} // check has tag

        return view('dashboard.post.create',compact('categories','tags'));

    }//end create

    public function store(Request $request){


        $this->validate($request,[
            "title"         => "required",
            "content"       => "required",
            "category_id"   => "required",
            "photo"         => "required|image",
            "tag"           => "required",
        ]);


           $photo = $request->photo;
           $photo_new_name = time().$photo->getClientOriginalName();
           $photo->move('uploads/posts',$photo_new_name);


        $post = Post::create([
            "title"          => $request->title,
            "content"        => $request->content,
            "category_id"    => $request->category_id,
            "photo"          => 'uploads/posts/'.$photo_new_name,
            "slug"           =>str_slug($request->title),

        ]);

        //$post ->save();

        $post -> tags()->attach($request->tag);
        return redirect()->route('dashboard.post.index');

    } // end store function



    public function show($id)
    {
        //
    }


    public function edit($id)
    {

        $post = Post::find($id);
        return view('dashboard.post.edit')->with('post',$post)
        ->with('categories',Category::all())->with('tags',Tag::all());;
        
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request,[
            "title"    => "required",
            "content"  => "required",
            "category_id"  => "required"
        ]);


        if ( $request->hasFile('photo')  ) {
            $photo = $request->photo;
            $photo_new_name = time().$photo->getClientOriginalName();
            $photo->move('uploads/posts/',$photo_new_name);
            $post->photo = 'uploads/posts/'.$photo_new_name;
        }

        $post->title =  $request->title;
        $post->content =  $request->content;
        $post->category_id = $request->category_id;
        $post->save();
        $post->tags()->sync($request->tag);
        return redirect()->route('dashboard.post.index');

    } // end update


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('dashboard.post.index');
    }
}
