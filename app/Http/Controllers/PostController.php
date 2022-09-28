<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost()
    { 
        $posts = Post::all();
        return view('postpage', compact('posts'));
    }

    public function createPost()
    {
        return view('createPost');
    }

    public function storePost(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('post.index');
    }

    public function editPost(Post $post)
    {
        return view('updatePost')->with('post', $post);
    }

    public function updatePost(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('post.index');
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');

    }
}
