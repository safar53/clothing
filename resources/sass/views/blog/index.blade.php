@extends('layouts.app')

@section('content')  

<div class="wrapper blog">    
    <!--blog main area are start-->
    <div class="shop-main-area pt-70 pb-40">
        <div class="container">
            <div class="row">                
                <!--main-shop-product start-->
                <div class="col-lg-12 col-md-12 order-lg-2 order-md-2 order-1">
                   <div class="row">
                        <div class="blog-wraper row">
                        @foreach ($blogs as $blog)                            
                        <div class="col-lg-6">
                            <div class="single-blog sb-2 mb-30">
                                <div class="blog-img pos-rltv product-overlay">
                                    <a href="{{ route('blog.show',['id' => $blog->id , 'slug' => $blog->title]) }}"><img src="{{ Voyager::image($blog->image) }}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h5 class="uppercase font-bold"><a href="{{ route('blog.show',['id' => $blog->id , 'slug' => $blog->title]) }}">{{ $blog->title }}</a></h5>
                                        <div class="blog-text">
                                            <p>{{ Str::limit(strip_tags($blog->description),99) }}</p>
                                        </div> <a class="read-more montserrat" href="{{ route('blog.show',['id' => $blog->id , 'slug' => $blog->title]) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>                    
                    {{-- <!--pagination start-->                                        
                    <div class="col-lg-12">
                        <div class="pagination-btn text-center">
                            {{ $blogs->links() }}
                        </div>
                    </div>                     --}}
                    <!--pagination end-->
                </div>
                <!--main-shop-product start-->
            </div>
        </div>
    </div>
    <!--blog main area are end-->
</div>

@endsection