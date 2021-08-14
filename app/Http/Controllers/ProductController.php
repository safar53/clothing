<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validator\Validation;
use App\Product;
use App\Category;
use App\Brand;
use App\Blog;
use App\Color;
use App\Size;
use App\Tag;

class ProductController extends Controller
{
    public function categories(Request $request)
    {       
        $conditions = [];

        if($request->input('category') > 0){
            array_push($conditions, ['category_id', '=', $request->input('category')]);
        }

        $products = Product::where($conditions)->take(50);
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $tags = Tag::all();

        if(request()->has('color')){
        }

        if(request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(9);
        }elseif(request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(9);
        }else{
            $products = $products->paginate(9);
        }

        return view('product.shop_categories')->with(
            [
                'products'=> $products,
                'categories' => $categories,
                'colors' => $colors,
                'sizes' => $sizes,
                'tags' => $tags,
            ]
        );
    }


    public function brands(Request $request)
    {       

        $conditions = [];
        
        if(($request->input('brand') > 0) || (request()->has('color')))
        
            array_push($conditions, ['brand_id', '=', $request->input('brand')]);        

        $products = Product::where($conditions)->take(50);
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        $tags = Tag::all();

        if(request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(9);
        }elseif(request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(9);
        }else{
            $products = $products->paginate(9);
        }

        return view('product.shop_brands')->with(
            [
                'products'=> $products,
                'brands' => $brands,
                'colors' => $colors,
                'sizes' => $sizes,
                'tags' => $tags,
            ]
        );
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $slug,$id
     * @return \Illuminate\Http\Response
     */
    public function show($slug,$id)
    {
        $product = Product::where('id',$id)->where('name',$slug)->firstOrFail();
        $relateds = Product::where('id', '!=', $id)->where('category_id', '=', $product->category_id)->inRandomOrder()->take(8)->get();
        $images = json_decode($product->image);
        $colors = $product->colors()->get();
        $sizes = $product->sizes()->get();
        $tags = $product->tags()->get();
        
        return view('product.product')->with(
            [
                'product' => $product,
                'relateds' => $relateds,
                'images' => $images,
                'colors' => $colors,
                'sizes' => $sizes,
                'tags' => $tags,
            ]
        );
    }
}
