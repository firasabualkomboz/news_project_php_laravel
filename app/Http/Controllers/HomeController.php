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
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $lastesd_posts    = Post::latest()->get();
        $get_all_tags     =Tag::all();

        return view('front.inedx',compact('get_all_category','lastesd_posts','get_all_tags'))
        ->with('first_post' , Post::orderBy('created_at','desc')->first())
        ->with('second_post' , Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
        ->with('third_post' , Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
        ->with('fourth_post' , Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
        ;
    }
}
