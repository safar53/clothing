@extends('layouts.app')

@section('content')


<div class="shop-main-area pt-70 pb-40">
    <div class="container">
        <div class="row">
            @foreach ($galleries as $gallery)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-blog sb-2 mb-30">
                    <div class="blog-img pos-rltv product-overlay">
                        <a href="{{ route('gallery.show',['id' => $gallery->id, 'slug' => $gallery->author_name]) }}"><img style="height: 250px" src="{{ Voyager::image( json_decode($gallery->images)[0] ) }}" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-title">
                        <h5 class="uppercase font-bold">{{ $gallery->author_name }}</h5>
                            <div class="blog-text">
                                <p>{{ Str::limit(strip_tags($gallery->comment),55) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection