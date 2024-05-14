<?php

namespace App\Http\Controllers;
use App\models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function menampilkan(){

    $post = Post::all();
    return view ('posts/index', compact('post'));
    }

    public function show($id){

        $post = Post::findOrFail($id);
        return view ('posts/show', compact('post'));
    }
}
