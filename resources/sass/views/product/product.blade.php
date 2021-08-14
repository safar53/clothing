@extends('layouts.app')

@section('content') 


<div class="wrapper single-product">    
    <!--single-protfolio-area are start-->
    <div class="single-protfolio-area ptb-70">
      <div class="container">
          <div class="row">
                <div class="col-lg-7">
                   <div class="portfolio-thumbnil-area">
                    <div class="product-more-views">
                        <div class="tab_thumbnail" data-tabs="tabs">
                            <div class="thumbnail-carousel">
                                <ul class="nav">
                                    @php
                                        $count = count($images);
                                    @endphp
                                    @for ($i = 0; $i < $count; $i++)
                                    <li>
                                    <a class="box-shadow" id="view{{$i+1}}{{$i+1}}" href="#view{{$i+1}}" class="shadow-box" aria-controls="view{{$i+1}}" data-toggle="tab">   
                                            <img src="{{ Voyager::image( $images[$i] ) }}" alt="" />  
                                        </a>
                                    </li>    
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content active-portfolio-area pos-rltv">                       
                        @for ($i = 0; $i < $count; $i++)
                        <div role="tabpanel" class="tab-pane" id="view{{$i+1}}">
                            <div class="product-img">
                            <a class="fancybox" data-fancybox-group="group" href="{{ Voyager::image( $images[$i] ) }}"><img src="{{ Voyager::image( $images[$i] ) }}" alt="Single portfolio" /></a>
                            </div>
                        </div>
                        @endfor                        
                    </div>
                </div>
            </div>
                <div class="col-lg-5">
                    <div class="single-product-description">
                       <div class="sp-top-des">
                            <h3>{{$product->name}}</h3>
                            <div class="prodcut-ratting-price">
                                <div class="prodcut-price">
                                    <div class="new-price">{{$product->price}} </div>
                                    {{-- <div class="old-price"> <del>$250</del> </div> --}}
                                </div>
                            </div>
                        </div>
                        
                        <div class="sp-des">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="sp-bottom-des">
                        <div class="single-product-option">
                            <div class="sort product-type">
                                <label>Color: </label>
                                <select id="input-sort-color">
                                    @foreach ($colors as $color)
                                        <option value="#">{{$color->name}}</option>                                        
                                    @endforeach                                    
                                    <option value="#" selected>Chose Your Color</option>
                                </select>
                            </div>
                            <div class="sort product-type">
                                <label>Size: </label>
                                <select id="input-sort-size">
                                    @foreach ($sizes as $size)
                                        <option value="#">{{$size->name}}</option>                                        
                                    @endforeach 
                                    <option value="#" selected="">Chose Your Size</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="quantity-area">
                            <label>Qty :</label>
                            <div class="cart-quantity">
                                <form action="#" method="POST" id="myform">
                                    <div class="product-qty">
                                        <div class="cart-quantity">
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="social-icon socile-icon-style-1">
                            <ul>
                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart add-cart-text" data-placement="left" tabindex="0">Add To Cart<i class="fa fa-cart-plus"></i></a></li>
                                <li><a href="#" data-tooltip="Wishlist" class="w-list" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                <li><a href="#" data-tooltip="Compare" class="cpare" tabindex="0"><i class="fa fa-refresh"></i></a></li>
                                <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="fa fa-eye"></i></a></li>
                            </ul>
                        </div> --}}
                  </div>
              </div>
          </div>
      </div>  
    </div>
    </div>
    <!--single-protfolio-area are start-->
    
    <!--descripton-area start -->
    <div class="descripton-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-area tab-cars-style">
                        <div class="title-tab-product-category row">
                            <div class="col-lg-12 text-center">
                                <ul class="nav mb-40 heading-style-2" role="tablist">
                                    <li role="presentation"><a href="#newarrival" aria-controls="newarrival" role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation"><a class="active" href="#bestsellr" aria-controls="bestsellr" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer" role="tab" data-toggle="tab">Tags</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="content-tab-product-category">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                    <div class="review-wraper">
                                        {{$product->description}}
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fix fade show active" id="bestsellr">
                                    <div class="review-wraper">
                                        {{$product->review}}
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fix fade in" id="specialoffer">
                                    <ul class="tag-filter">
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Winter</a></li>
                                        <li><a href="#">Street Style</a></li>
                                        <li><a href="#">Style</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Collection</a></li>
                                        <li><a href="#">Spring 2019</a></li>
                                        <li><a href="#">Street Style</a></li>
                                        <li><a href="#">Style</a></li>
                                        <li><a href="#">Shop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!--descripton-area end--> 
    
    <!--new arrival area start-->
    <div class="new-arrival-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">Related Product</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                        @foreach ($relateds as $related)
                        <div class="col-lg-3">
                            <!-- single product start-->
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="{{route('shop.show',['id' => $related->id, 'slug' => $related->name])}}"> <img alt="" src="{{ Voyager::image( $images[0] ) }}"
                                                class="primary-image"> <img alt="" src="{{ Voyager::image( $images[0] ) }}"
                                                class="secondary-image"> </a>
                                    </div>
                                    {{-- <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                    data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                        class="fa fa-heart-o"></i></a></li>
                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                        class="fa fa-refresh"></i></a></li>
                                            <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal"
                                                    data-target=".modal"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="product-text">
                                <div class="prodcut-name"> <a href="{{route('shop.show',['id' => $related->id, 'slug' => $related->name])}}">{{$related->name}}</a>
                                    </div>
                                    <div class="prodcut-ratting-price">
                                        <div class="prodcut-price">
                                            <div class="new-price"> {{$related->price}} </div>
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
    <!--new arrival area end-->
</div>



@endsection

@section('css')

    @endsection

@section('js')
    <script>
        $('#view1').addClass('active');        
        $('#view11').addClass('active');        
    </script>
    @endsection