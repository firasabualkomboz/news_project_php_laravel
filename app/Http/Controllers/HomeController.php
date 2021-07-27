<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function user_page(){


        $get_all_category = Category::all();
        $lasted_posts    = Post::latest()->take(2)->get();
        $get_all_tags     =Tag::all();

        return view('front.inedx',compact('get_all_category','lasted_posts','get_all_tags'))
        ->with('first_post' , Post::orderBy('created_at','desc')->first())
        ->with('second_post' , Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post' , Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('fourth_post' , Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
        ->with('category_one',  Category::find(1))
        ->with('category_two',  Category::find(2))
        ->with('category_three',  Category::find(3))
        ->with('category_four',  Category::find(4))

            ;
    }

    public function show_single_page($slug){
        $get_all_category = Category::all();
        $get_all_tags     =Tag::all();
        $post = Post::where('slug',$slug)->first();
        $next_page = Post::where('id' , '>' ,$post->id)->min('id');
        $prev_page = Post::where('id' , '<' ,$post->id)->max('id');
        return view('front.single-page-posts',compact('post','get_all_category','get_all_tags'))
            ->with('next' , Post::find($next_page))
            ->with('prev' , Post::find($prev_page))
        ;
    }




    public function show_category($id)
    {

        $get_all_category = Category::all();
        $get_all_tags     =Tag::all();
        $category = Category::find($id);
        return view('front.category',compact('get_all_category','get_all_tags'))

        ->with('title' , $category->name)
        //                     ->with('categories' , Category::take(5)->get())
        ->with('name' , $category->name )
        ->with('category' , $category ) ;

    }


}
