<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Service;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $brands = Brand::all();
        $slider_products = Product::where('is_slider', 1)->take(3)->get();
        $promo_products = Product::where('is_promo', 1)->take(6)->get();
        $uniforms = Product::where('is_uniform', 1)->take(8)->get();
        $auction_products = Product::where('is_auction', 1)->take(3)->get();
        $services = Service::take(4)->get();


        return view('index')->with(
            [
                'slider_products' => $slider_products,
                'promo_products' => $promo_products,
                'uniforms' => $uniforms,
                'auction_products' => $auction_products,
                'brands' => $brands,
                'services' => $services,
            ]
        );
    }
}
