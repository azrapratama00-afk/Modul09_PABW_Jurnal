<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index()
   {
    return Post::all();
   } 

   public function store(Request $request)
   {
    $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'article'=> 'required',
    ]);

    return Post::create($request->all());
   }

   public function show($id)
   {
    return Post::find($id);
   }

   public function update(Request $request, $id)
   {
    $post = Post::find($id);

    $request->validate([
    'title' => 'string|max:255',
    'author' => 'string|max:255',
    'article' => 'nullable',
    ]);

    $post->update($request->all());

    return $post;
    }

    public function destroy($id)
    {
        return Post::destroy($id);
    }
}
