@extends('layouts.app')

@section('content') 

<div class="wrapper shop-full-grid">  
    
    @if ($products->count() == 0)
        <div style="height:20vh" class="alert alert-danger">
            No results for {{ $query }}
        </div>        
    @else
    <!--shop main area are start-->
    <div class="shop-main-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-area-top">
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-6">                                
                                <div class="sort product-type">
                                    <span>Sort By :</span>
                                    <div class="sorting">
                                        <a href="{{ route('search.product',['query' => request('query') , 'sort' => 'low_high']) }}">Low to High</a>
                                        <a href="{{ route('search.product',['query' => request('query') , 'sort' => 'high_low']) }}">High to Low</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-3 col-md-2">
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
                            <div class="col-md-4 d-sm-none d-md-block d-block">
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
                                    @if (count($products) == 1 && count(json_decode($products[0]->image)) < 2)
                                    <div style="height:20vh" class="alert alert-danger w-100">
                                        No results for {{ $query }}
                                    </div>
                                    @else
                                    @foreach ($products as $product)
                                    @if (count(json_decode($product->image)) > 2 )
                                    <div class="col-lg-3 col-md-4 item">
                                        <!-- single product start-->
                                        <div class="single-product">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href="{{route('shop.show', ['id' => $product->id, 'slug' => $product->name])}}"> <img alt=""
                                                            src="{{ Voyager::image( json_decode($product->image)[0] ) }}" class="primary-image"> <img
                                                            alt="" src="{{ Voyager::image( json_decode($product->image)[1] ) }}"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="prodcut-name"> <a href={{route('shop.show', ['id' => $product->id, 'slug' => $product->name])}}>{{ $product->name }}</a> </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price">
                                                        <div class="new-price"> {{ $product->price }} AZN</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>
                                    @else 
                                    @continue
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <!--shop grid are end-->

                            <!--shop product list start-->
                            <div role="tabpanel" class="tab-pane  fade in" id="list">
                                <div class="total-shop-product-list row">
                                    @if (count($products)==1 && count(json_decode($products[0]->image)) < 2)
                                    <div style="height:20vh" class="alert alert-danger">
                                        No results for {{ $query }}
                                    </div>
                                    @else
                                    @foreach ($products as $product)
                                    @if (count(json_decode($product->image)) > 2 )
                                    <div class="col-lg-12 item">
                                        <!-- single product start-->
                                        <div class="single-product single-product-list full-widht-list">
                                            <div class="product-img">
                                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                                    <a href={{route('shop.show', ['id' => $product->id, 'slug' => $product->name])}}> <img alt=""
                                                            src="{{ Voyager::image( json_decode($product->image)[0] ) }}" class="primary-image"> <img
                                                            alt="" src="{{ Voyager::image( json_decode($product->image)[1] ) }}"
                                                            class="secondary-image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-text prodcut-text-list fix">
                                                <div class="prodcut-name list-name montserrat"> <a
                                                        href="single-product.html">{{ $product->name }}</a>
                                                </div>
                                                <div class="prodcut-ratting-price">
                                                    <div class="prodcut-price list-price">
                                                        <div class="new-price"> {{ $product->price }} AZN</div>
                                                    </div>
                                                </div>
                                                <div class="list-product-content">
                                                    <p> {{ $product->description }} </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single product end-->
                                    </div>
                                    @else 
                                    @continue
                                    @endif
                                    @endforeach
                                    @endif
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
    </div>
    <!--shop main area are end-->
</div>
@endif

@endsection