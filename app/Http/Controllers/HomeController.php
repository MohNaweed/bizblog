<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


       $posts = Post::select('*')
                    ->inRandomOrder()
                    ->paginate(5);

        $recentPosts = Post::limit(4)->orderBy('updated_at','desc')->get();



          return view('home')
            ->withPosts( $posts)
            ->with('categories', Category::all())
            ->withRecentPosts($recentPosts);


    }


    public function show($id){
        $recentPosts = Post::limit(4)->orderBy('updated_at','desc')->get();
        $categories = Category::all();
        return view('website.blog_details',compact('recentPosts','categories'));
    }
}
