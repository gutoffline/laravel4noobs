<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function getPosts(){
        // $posts = Post::all();
        $posts = Post::paginate(5);
        $users = User::all();
        return view('managePosts',compact(['posts','users']));
        // return response()->json($posts);
    }

    public function postsBlogPost(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $data = $request->only(['title','content','user_id']);
        $data['published'] = $request->has('published');

        Post::create($data);

        return redirect('/posts');

    }

    public function getPost(Post $post){
        $post = Post::find($post);
        return response()->json($post);
    }
}
