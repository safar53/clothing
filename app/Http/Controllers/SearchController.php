<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    
    public function product(Request $request)
    {
        $request->validate([
            'query' => 'min:3',
        ]);
        $query = $request->input('query');
        $products = Product::where('name' , 'like' , "%$query%")
                            ->orWhere('about' , 'like' , "%$query%")
                            ->orWhere('description' , 'like' , "%$query%")->take(50);

        if(request()->sort == 'low_high'){
            $products = $products->orderBy('price')->paginate(12);
        }elseif(request()->sort == 'high_low'){
            $products = $products->orderBy('price','desc')->paginate(12);
        }else{
            $products = $products->paginate(12);
        }
        return view('search.product')->with([
            'products' => $products,
            'query' => $query,
        ]);
    }

}
