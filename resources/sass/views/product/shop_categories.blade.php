@extends('layouts.app')

@section('content') 

<div class="wrapper shop">    
    <!--shop main area are start-->
    <div class="shop-main-area grid-view_area ptb-70">
        <div class="container">
            <div class="row">
                <!--main-shop-product start-->
                <div class="col-lg-9 col-md-8 order-lg-2 order-md-2 order-1">
                    <div class="shop-wraper">
                        <div class="col-lg-12">
                            <div class="shop-area-top">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-9 col-md-9">
                                        <div class="sort product-type">
                                            <span>Sort By :</span>
                                            <div class="sorting">
                                                <a href="{{ route('shop.category',['category' => request('category') , 'color' => request('color') , 'size' => request('size') , 'price' => request('price') ,'sort' => 'low_high']) }}">Low to High</a>
                                                <a href="{{ route('shop.category',['category' => request('category') , 'color' => request('color') , 'size' => request('size') , 'price' => request('price') ,'sort' => 'high_low']) }}">High to Low</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-3">
                                        <div class="list-grid-view text-center">
                                            <ul class="nav" role="tablist">
                                                <li role="presentation"><a class="active" href="#grid" aria-controls="grid"
                                                        role="tab" data-toggle="tab"><i class="zmdi zmdi-widgets"></i></a>
                                                </li>
                                                <li role="presentation"><a href="#list" aria-controls="list" role="tab"
                                                        data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 d-lg-none d-xl-block d-none">
                                        <div class="total-showing text-right">
                                            
                                            Showing - <span>{{$products->count()}}</span> Of Total <span>{{$products->total()}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="shop-total-product-area clearfix mt-35">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!--tab grid are start-->
                                    <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                        <div class="total-shop-product-grid row">
                                            @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-6 item">
                                                <!-- single product start-->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <a href="{{route('shop.show',['id' => $product->id , 'slug' => $product->name])}}"> <img alt=""
                                                            src="{{ Voyager::image( json_decode($product->image)[0] ) }}" class="primary-image"> <img
                                                                    alt="" src="{{ Voyager::image( json_decode($product->image)[1] ) }}"
                                                                    class="secondary-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-text">
                                                        <div class="prodcut-name"> <a href="{{route('shop.show',['id' => $product->id, 'slug' => $product->name])}}">{{ $product->name }}</a> </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price">
                                                                <div class="new-price">{{ $product->price }} AZN</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single product end-->
                                            </div>
                                            @endforeach                                            
                                        </div>
                                    </div>
                                    <!--shop grid are end-->
    
                                    <!--shop product list start-->
                                    <div role="tabpanel" class="tab-pane fade" id="list">
                                        <div class="total-shop-product-list row">
                                            @foreach ($products as $product)
                                            <div class="col-lg-12 item">
                                                <!-- single product start-->
                                                <div class="single-product single-product-list">
                                                    <div class="product-img">
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <a href="{{route('shop.show', ['id' => $product->id, 'slug' => $product->name])}}"> <img alt=""
                                                            src="{{ Voyager::image( json_decode($product->image)[0] ) }}" class="primary-image"> <img
                                                                    alt="" src="{{ Voyager::image( json_decode($product->image)[1] ) }}"
                                                                    class="secondary-image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-text prodcut-text-list fix">
                                                        <div class="prodcut-name list-name montserrat"> <a
                                                                href="{{route('shop.show',['id' => $product->id, 'slug' => $product->name])}}">{{$product->name}}</a>
                                                        </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price list-price">
                                                            <div class="new-price">{{$product->price}} AZN</div>
                                                                {{-- <div class="old-price"> <del>$250</del> </div> --}}
                                                            </div>
                                                        </div>
                                                        <div class="list-product-content">
                                                        <p>{{$product->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single product end-->
                                            </div>
                                            @endforeach                                                                                      
                                        </div>
                                    </div>
                                    <!--shop product list end-->
    
                                    <!--pagination start-->
                                    
                                    <div class="col-lg-12">
                                        <div class="pagination-btn text-center">
                                            {{ $products->appends($_GET)->links() }}
                                        </div>
                                    </div>
                                    <!--pagination end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--main-shop-product start-->
    
                <!--shop sidebar start-->
                <div class="col-lg-3 col-md-4 order-lg-1 order-md-1 order-2">
                    <div class="shop-sidebar">
                        <!--single aside start-->
                        <aside class="single-aside catagories-aside">
                            <div class="heading-title aside-title pos-rltv">
                                <h5 class="uppercase">categories</h5>
                            </div>
                            <div id="cat-treeview" class="product-cat">
                                <ul>
                                    @foreach ($categories as $category)
                                    <li class="closed">
                                        <a href="{{route('shop.category',['category' => $category->id])}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        <!--single aside end--><!--single aside start-->
                        <aside class="single-aside color-aside">
                            <div class="heading-title aside-title pos-rltv">
                                <h5 class="uppercase">Color</h5>
                            </div>
                            <ul class="color-filter mt-30">
                                @foreach ($colors as $color)
                                    <li><a href="{{ route('shop.category',['category' => request('category') , 'size' => request('size') , 'price' => request('price') , 'color' => $color->id ]) }}" style="background-color:{{ $color->name }}" class="color-1"></a></li>
                                @endforeach                                
                            </ul>
                        </aside>
                        <!--single aside end-->
    
                        <!--single aside start-->
                        <aside class="single-aside size-aside">
                            <div class="heading-title aside-title pos-rltv">
                                <h5 class="uppercase">Size Option</h5>
                            </div>
                            <ul class="size-filter mt-30">
                                @foreach ($sizes as $size)
                                    <li><a href="{{ route('shop.category',['category' => request('category') , 'color' => request('color') , 'price' => request('price') , 'size' => $size->id]) }}" class="size-s">{{$size->name}}</a></li>                                    
                                @endforeach
                            </ul>
                        </aside>
                        <!--single aside end-->

    
                        <!--single aside start-->
                        <aside class="single-aside price-aside fix">
                            <div class="heading-title aside-title pos-rltv">
                                <h5 class="uppercase">price</h5>
                            </div>
                            <div class="price_filter">
                                <form class="row mt-5" action="{{ route('shop.category',['category' => request('category') , 'size' => request('size') , 'color' => request('color') ]) }}" method="get">
                                    <div class="col-6">
                                        <div class="input-box">
                                            <input name="min" placeholder="min" type="number" class="p-3">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-box">
                                            <input name="max" placeholder="max" type="number" class="p-3">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="input-box">
                                            <input name="submit" class="submit-btn" value="Filter" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </aside>
                        <!--single aside end-->
    
                            
                        <!--single aside start-->
                        <aside class="single-aside tag-aside">
                            <div class="heading-title aside-title pos-rltv">
                                <h5 class="uppercase">Product Tags</h5>
                            </div>
                            <ul class="tag-filter mt-30">
                                @foreach ($tags as $tag)
                                    <li><a href="{{ route('shop.category',['brand' => request('category') , 'color' => request('color') , 'price' => request('price') , 'size' => request('size') , 'tag' => $tag->id]) }}">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                        <!--single aside end-->
                    </div>
                </div>
                <!--shop sidebar end-->
            </div>
        </div>
    </div>
    <!--shop main area are end-->
</div>

@endsection