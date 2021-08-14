        
@extends('layouts.app')

@section('content')  

<div class="wrapper single-blog">

    <!--single blog main area are start-->
    <div class="shop-main-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <!--main-shop-product start-->
                <div class="col-lg-12 col-md-12 order-lg-2 order-md-2 order-1">
                    <div class="single-blog-body">
                        <div class="single-blog sb-2 mb-30">
                            <div class="blog-img pos-rltv product-overlay">
                                <a href="{{ route('blog.show',['id' => $blog->id , 'slug' => $blog->title]) }}"><img src="{{ Voyager::image($blog->image) }}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">
                                    <h5 class="uppercase font-bold">New fashion collection 2019</h5>
                                    <div class="blog-text">
                                        <p>{!! $blog->description !!}</p>
                                    </div>
                                </div>
                                <div class="blockqot mtb-30">
                                    <blockquote>
                                        <p>{{ $blog->blockquote}}</p>
                                    </blockquote>
                                </div>
                                <div class="related-post mt-30">
                                    <h5 class="uppercase sb-title">Related Blog</h5>
                                    <div class="total-blog-3 row">
                                        @foreach ($relateds as $related)
                                        <div class="col-lg-6">
                                            <div class="single-blog">
                                                <div class="blog-img pos-rltv product-overlay">
                                                    <a href="{{ route('blog.show',['id' => $related->id , 'slug' => $related->title]) }}"><img src="{{ Voyager::image($related->image) }}" alt=""></a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-title">
                                                        <h5 class="uppercase font-bold"><a href="{{ route('blog.show',['id' => $related->id , 'slug' => $related->title]) }}">{{ $related->title }}</a></h5>
                                                        <div class="blog-text">
                                                            <p>{{ Str::limit(strip_tags($blog->description),99) }}</p>
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
                    <!--main-shop-product start-->
                </div>
            </div>
        </div>
    </div>
    <!--single blog main area are end-->
</div>

@endsection