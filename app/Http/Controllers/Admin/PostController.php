<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use App\User;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $post = Post::find(42);

        // return $post->image->path;


        $posts = Post::orderBy('updated_at','desc')->get();
        return view('admin.pages.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.post.create')->withCategories(Category::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $uploadedImage = $request->file('pic')->store('public/images');
        $retrivePath = storage_path('app'). '\\' .$uploadedImage;

        $storePath = str_replace('images','smallPic',$retrivePath);
        $img = Image::make($retrivePath)->resize('100','100')->save($storePath);

        $saveName = str_replace('public/images/','',$uploadedImage);


        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->user_id = auth()->id();
        $post->save();
        $post->categories()->sync($request->categories);
        $post->image()->create([
            'path' => $saveName
        ]);

        Toastr::success('The post has been successfully added','Add Post');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {


        return view('admin.pages.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        Post::destroy($post->id);

        Toastr::info('The post has been deleted successfully','info');

        return redirect()->route('posts.index');
    }
}
