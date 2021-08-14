<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return view('gallery.gallery')->with('galleries', $galleries);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $slug,$id
     * @return \Illuminate\Http\Response
     */
    public function show($slug,$id)
    {
        $gallery = Gallery::where('id',$id)->where('author_name',$slug)->firstOrFail();
        $images = json_decode($gallery->images);

        
        return view('gallery.single_gallery')->with(
            [
                'gallery' => $gallery,
                'images' => $images,
            ]
        );
    }
}
