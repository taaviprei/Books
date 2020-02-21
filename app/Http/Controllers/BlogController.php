<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $posts = Blog::all();

        return view('blog.index', compact('posts'));
    }

    public function create(){
        return view('blog.create');
    }

    public function save(Request $request){
        $post = new Blog();

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        return view('blog.index');
    }
    
}
