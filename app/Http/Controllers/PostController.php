<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::orderBy('id')-> take(4)-> get();
   
        
        return view('articles', [
            'posts' => $posts,
        ]);
    }

     //
     public function show($id) {
         //$post =Post::find($id);
         $post =Post::findOrFail($id);

        return view('article', [
            'post' => $post
        ]);
    }
    public function create() {

       return view('create');
   }

   public function store(Request $request) {
    /*$post = new Post();
    $post ->title = $request->title;
    $post ->content = $request->content;
    $post ->save();*/

 
    Post::create([
        'title' => $request ->title,
        'content' => $request->content
    ]);

   
}
}
