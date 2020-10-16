<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    $blogs=Blog::orderBy('id')->get();
    //dd($blogs);
    return view('homeblog',compact('blogs'));
}}
