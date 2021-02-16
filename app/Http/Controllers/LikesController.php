<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Like;

class LikesController extends Controller
{
    public function store(Request $request){

        $post = Post::find($request->post_id);

        if(!$post->isLiked(auth()->user())){
            $post->likes()->create([
                'user_id' => auth()->id()
            ]);
        }

        return $request;
    }

    public function delete(Request $request){

        $post = Post::find($request->post_id);

        if($post->isLiked(auth()->user())){

            $like = Like::where('post_id',$request->post_id)
                ->where('user_id',auth()->id())->first();

            Like::destroy($like->id);
        }

        return 'from delete of likescontroller';
    }
}
