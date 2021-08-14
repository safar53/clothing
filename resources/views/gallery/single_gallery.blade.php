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
                    <div class="single-product-description p-0">
                       <div class="sp-top-des">
                            <div class="prodcut-ratting-price">
                                <div class="prodcut-price">
                                    <div class="new-price">{{ $gallery->author_name}}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sp-des">
                            <p>{{ $gallery->comment }}</p>
                        </div>
                  </div>
              </div>
          </div>
      </div>  
    </div>
    </div>
    <!--single-protfolio-area are start-->
    
@endsection

@section('js')
    <script>
        $('#view1').addClass('active');        
        $('#view11').addClass('active');        
    </script>
@endsection