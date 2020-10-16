<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index($title)
    {
        $post=Post::where ('title',$title)->firstOrFail();
     //   dd($title);
        return view ('welcome',['title'=>$post]);
    }
}
