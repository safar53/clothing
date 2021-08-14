@extends('layouts.app')

@section('content')


<div class="frequently-area pt-70 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="frequently-content">
                    <div class="frequently-desc">
                    <h3>{{ setting('site.service_title') }}</h3>
                        <p>{{ setting('site.service_description') }}</p>
                    </div>
                </div>
                <!-- Begin Frequently Accordin -->
                <div class="frequently-accordion">
                    <div id="accordion">
                        @foreach ($services as $service)
                            <div class="card">
                                <div class="card-header">
                                    {{ $service->title }}
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="card-body d-none">{{ $service->description }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--Frequently Accordin End Here -->
            </div>
        </div>
    </div>
</div>

@endsection
