        
@extends('layouts.app')

@section('content')    

        <!--slider area start-->
        <div class="slider-area pos-rltv carosule-pagi cp-line">
            <div class="active-slider">
                @foreach ($slider_products as $slider_product)
                    <div class="single-slider pos-rltv">
                        <div class="slider-img"><img src="{{ Voyager::image( $slider_product->main_slider_image ) }}" alt=""></div>
                        <div class="slider-content pos-abs">
                            <h4>Best Collection</h4>
                            <h1 class="uppercase pos-rltv underline">exclusive Fashion 2019</h1>
                            <a href="{{route('shop.show',['id' => $slider_product->id, 'slug' => $slider_product->name])}}" class="btn-def btn-white">See Now</a>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        <!--slider area end-->      

        <!--new-arrival on-sale Top-ratted area start-->
        <div class="arrival-ratted-sale-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                        <div class="ctg-slider-active">
                            <div class="single-ctg new-arrival-ctg">
                                @foreach ($new_products as $new_product)
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                            <a href="{{route('shop.show',['id' => $new_product->id, 'slug' => $new_product->name])}}"><img src="{{ Voyager::image( $new_product->auction_image ) }}"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>{{ $new_product->name }}</p>
                                                <p class="font-bold">{{ $new_product->price }} AZN</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <a href="{{route('shop.show',['id' => $slider_product->id, 'slug' => $slider_product->name])}}" class="btn-def btn-white">See Now</a>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                                @endforeach
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ctg on-sale-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">On Sale</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    @foreach ($sale_products as $sale_product)
                                    <div class="single-ctg-item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="{{route('shop.show',['id' => $sale_product->id, 'slug' => $sale_product->name])}}">
                                                    <img src="{{ Voyager::image( $sale_product->auction_image ) }}"
                                                        alt="">
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>{{ $sale_product->name }}</p>
                                                <p class="font-bold">{{ $sale_product->price }} AZN</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <a href="{{route('shop.show',['id' => $slider_product->id, 'slug' => $slider_product->name])}}" class="btn-def btn-white">See Now</a>                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-ctg top-rated-ctg">
                            <div class="heading-title heading-style pos-rltv mb-50 text-center">
                                <h5 class="uppercase">Top Rated</h5>
                            </div>
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                @foreach ($top_rated_products as $top_rated_product)
                                <div class="single-ctg-item">
                                    <div class="row">
                                        <div style ="height:50% !important" class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="{{route('shop.show',['id' => $top_rated_product->id, 'slug' => $top_rated_product->name])}}">
                                                    <img src="{{ Voyager::image( $top_rated_product->auction_image ) }}"
                                                        alt="">
                                                    </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-6">
                                            <div class="product-ctg-content">
                                                <p>{{ $top_rated_product->name }}</p>
                                                <p class="font-bold">{{ $top_rated_product->price }} AZN</p>
                                                <div class="social-icon socile-icon-style-1 mt-15">
                                                    <a href="{{route('shop.show',['id' => $slider_product->id, 'slug' => $slider_product->name])}}" class="btn-def btn-white">See Now</a>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new-arrival on-sale Top-ratted area end-->

        <!--discunt-featured-onsale-area start -->
        <div class="discunt-featured-onsale-area pt-60 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="title-tab-product-category">
                                <div class="col-lg-12 text-center">
                                    <ul class="nav mb-40 heading-style-2" role="tablist">
                                        <li role="presentation"><a class="active" href="#bestsellr" aria-controls="bestsellr"
                                                role="tab" data-toggle="tab">Best Seller</a></li>
                                        <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer"
                                                role="tab" data-toggle="tab">Special Offer</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane  fade in active" id="bestsellr">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                                            @foreach ($best_seller_products as $best_seller_product)
                                            <div class="col-lg-3">
                                                <!-- single product start-->
                                                <div class="single-product">
                                                    <div class="product-img">                                            
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <a href="{{route('shop.show',['id' => $best_seller_product->id, 'slug' => $best_seller_product->name])}}"> <img alt=""
                                                                    src="{{ Voyager::image( json_decode($best_seller_product->image)[0] ) }}" class="primary-image">
                                                                <img alt="" src="{{ Voyager::image( json_decode($best_seller_product->image)[1] ) }}"
                                                                    class="secondary-image"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-text">
                                                    <div class="prodcut-name"> <a href="{{route('shop.show',['id' => $best_seller_product->id, 'slug' => $best_seller_product->name])}}">{{ $best_seller_product->name }}</a> </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price">
                                                            <div class="new-price">{{ $best_seller_product->price }} AZN</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single product end-->
                                            </div>
                                            @endforeach
                                            
                                            
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane  fade in" id="specialoffer">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                                            @foreach ($special_offer_products as $special_offer_product)
                                            <div class="col-lg-3">
                                                <!-- single product start-->
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <a href="{{route('shop.show',['id' => $special_offer_product->id, 'slug' => $special_offer_product->name])}}"> 
                                                                <img alt="" src="{{ Voyager::image( json_decode($special_offer_product->image)[0] ) }}" class="primary-image">
                                                                <img alt="" src="{{ Voyager::image( json_decode($special_offer_product->image)[1] ) }}" class="secondary-image"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-text">
                                                    <div class="prodcut-name"> <a href="{{route('shop.show',['id' => $special_offer_product->id, 'slug' => $special_offer_product->name])}}">{{ $special_offer_product->name }}</a> </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price">
                                                            <div class="new-price"> {{ $special_offer_product->price }} AZN</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single product end-->
                                            </div> 
                                            @endforeach                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--discunt-featured-onsale-area end-->

        <!--branding-section-area start-->
        <div class="branding-section-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="active-slider pos-rltv carosule-pagi cp-line pagi-02">
                            @foreach ( $auction_products as $auction_product)
                            <div class="single-slider">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6 col-md-6">
                                        <div class="brand-img text-center">
                                            <img src="{{ Voyager::image( $auction_product->sale_image ) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 col-md-6">
                                        <div class="brand-content ptb-55">
                                            <div class="brand-text color-lightgrey">
                                                <h6>New Fashion</h6>
                                            <h2 class="uppercase montserrat">{{ $auction_product->name }}</h2>
                                                <h3 class="montserrat">{{ $auction_product->price }} AZN</h3>
                                                <p>{{ $auction_product->description }}</p>
                                                <div class="social-icon-wraper mt-35">
                                                    <div class="social-icon">
                                                        <a href="{{route('shop.show',['id' => $slider_product->id, 'slug' => $slider_product->name])}}" class="btn-def btn-white">See Now</a>                                                                                                           
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--branding-section-area end-->

        <!--brand area are start-->
        <div class="brand-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-brand row">
                            @foreach ($brands as $brand)
                                <div class="col-lg-3">
                                <div class="single-brand shadow-box"><a href="{{route('shop.brand' , $brand->id)}}"><img src="{{ Voyager::image( $brand->image ) }}"
                                            alt=""></a></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--brand area are start-->

        <!--blog area are start-->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Blog</h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="total-blog row">
                            @foreach ($blogs as $blog)
                            <div class="col-md-4">
                                <div class="single-blog">
                                    <div class="blog-img pos-rltv product-overlay">
                                        <a href="{{route('blog.show',['id' => $blog->id , 'slug' => $blog->title])}}"><img src="{{ Voyager::image( $blog->image ) }}" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h5 class="uppercase font-bold"><a href="{{route('blog.show',['id' => $blog->id , 'slug' => $blog->title])}}">{{ $blog->title }}</a>
                                            </h5>
                                            <div class="blog-text">
                                                <p>{{ Str::limit($blog->description,99) }}</p>
                                            </div>
                                            <a class="read-more montserrat" href="{{route('blog.show',['id' => $blog->id , 'slug' => $blog->title])}}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--blog area are end-->

    @endsection