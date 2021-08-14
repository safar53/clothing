<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::take(12)->get();

        return view('blog.index')->with('blogs',$blogs);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $slug,$id
     * @return \Illuminate\Http\Response
     */
    public function show($slug,$id)
    {
        $blog = Blog::where('id',$id)->where('title',$slug)->firstOrFail();
        $relateds = Blog::where('id', '!=', $id)->inRandomOrder()->take(8)->get();

        return view('blog.blog')->with(
            [
                'blog' => $blog,
                'relateds' => $relateds,
            ]
        );
    }
}
