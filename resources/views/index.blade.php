        
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
                    <div class="col-12 heading-title pos-rltv mb-50 text-center">
                        <h5 class="uppercase font-weight-bold">Promo Məhsullar</h5>
                    </div>
                    @foreach ($promo_products as $promo_product)
                        <div class="col-md-4">                        
                            <div class="ctg-slider-active">
                                <div class="single-ctg new-arrival-ctg">
                                    <div class="single-ctg-item">
                                        <div class="row"> 
                                            <div class="col-lg-6 col-md-12 col-sm-6 pb-5">
                                                <div class="product-ctg-img pos-rltv product-overlay">
                                                <a href="{{route('shop.show',['id' => $promo_product->id, 'slug' => $promo_product->name])}}"><img src="{{ Voyager::image( $promo_product->auction_image ) }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-6">
                                                <div class="product-ctg-content">
                                                    <p>{{ $promo_product->name }}</p>
                                                    <p class="font-bold">{{ $promo_product->price }} AZN</p>
                                                    <div class="social-icon socile-icon-style-1 mt-15">
                                                        <a href="{{route('shop.show',['id' => $promo_product->id, 'slug' => $promo_product->name])}}" class="btn-def btn-white">See Now</a>                                                    
                                                    </div>
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
        <!--new-arrival on-sale Top-ratted area end-->

        <!--discunt-featured-onsale-area start -->
        <div class="discunt-featured-onsale-area pt-60 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-area tab-cars-style">
                            <div class="col-12 heading-title pos-rltv mb-50 text-center">
                                <h5 class="uppercase font-weight-bold">Uniformalar</h5>
                            </div>
                            <div class="clearfix"></div>
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane  fade in active" id="bestsellr">
                                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                                            @foreach ($uniforms as $uniform)
                                            @if (count(json_decode($uniform->image)) > 2 )
                                            <div class="col-lg-3">
                                                <!-- single product start-->
                                                <div class="single-product">
                                                    <div class="product-img">                                            
                                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                                            <a href="{{route('shop.show',['id' => $uniform->id, 'slug' => $uniform->name])}}"> <img alt=""
                                                                    src="{{ Voyager::image( json_decode($uniform->image)[0] ) }}" class="primary-image">
                                                                <img alt="" src="{{ Voyager::image( json_decode($uniform->image)[1] ) }}"
                                                                    class="secondary-image"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-text">
                                                    <div class="prodcut-name"> <a href="{{route('shop.show',['id' => $uniform->id, 'slug' => $uniform->name])}}">{{ $uniform->name }}</a> </div>
                                                        <div class="prodcut-ratting-price">
                                                            <div class="prodcut-price">
                                                            <div class="new-price">{{ $uniform->price }} AZN</div>
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
        <div class="container">
            <div class="row">                                                    
                <div class="col-12 heading-title pos-rltv mb-50 text-center">
                    <h5 class="uppercase font-weight-bold">Xüsusi təkliflər</h5>
                </div>
            </div>
        </div>
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
                    <div class="col-lg-12 text-center">
                        <div class="heading-title pos-rltv mb-50 text-center">
                            <h5 class="uppercase font-weight-bold">Brendlər</h5>
                        </div>
                    </div>
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
                    <div class="choose-us-area pb-70">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="heading-title pos-rltv mb-50 text-center">
                                        <h5 class="uppercase font-weight-bold">Xidmətlərimiz</h5>
                                    </div>
                                </div>
                                @foreach ($services as $service)
                                    <div class="col-lg-3 col-md-4">
                                        <a style="color: black" href="">
                                            <div class="single-choose text-center">
                                                <div class="choose-icon pos-rltv">
                                                    <i class="zmdi zmdi-truck"></i>
                                                </div>
                                                <div class="choose-title">
                                                    <h5>{{ $service->title }}</h5>
                                                </div>
                                                <div class="choose-des">
                                                    <p>{{ Str::limit($service->description,110) }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>                                    
                                @endforeach
                                {{-- <div class="col-lg-3 col-md-4">
                                    <div class="single-choose text-center">
                                        <div class="choose-icon pos-rltv">
                                            <i class="zmdi zmdi-headset-mic"></i>
                                        </div>
                                        <div class="choose-title">
                                            <h5>7/24 Sifariş qəbulu</h5>
                                        </div>
                                        <div class="choose-des">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, dolores numquam! Officiis ab fugiat temporibus quis? Ullam alias modi officiis, minima dicta officia. Voluptatibus iste consequatur et libero tempora sunt.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="single-choose text-center">
                                        <div class="choose-icon pos-rltv">
                                            <i class="zmdi zmdi-format-strikethrough-s"></i>
                                        </div>
                                        <div class="choose-title">
                                            <h5>Yüksək keyfiyyət</h5>
                                        </div>
                                        <div class="choose-des">
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel modi voluptas quibusdam esse molestiae at illum doloremque libero, ipsum enim iusto corrupti vero repellendus ullam ipsam maiores soluta fuga! Totam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-md-none d-block d-lg-block">
                                    <div class="single-choose text-center">
                                        <div class="choose-icon pos-rltv">
                                            <i class="zmdi zmdi-trending-up"></i>
                                        </div>
                                        <div class="choose-title">
                                            <h5>ffbgdfz</h5>
                                        </div>
                                        <div class="choose-des">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta iste vitae eius aut fuga reiciendis incidunt commodi corporis dolorem cum, ex facere possimus perspiciatis, nostrum molestias beatae, expedita dolorum quasi.</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12">
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
                    </div> --}}
                </div>
            </div>
        </div>
        <!--blog area are end-->

    @endsection