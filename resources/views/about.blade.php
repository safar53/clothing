@extends('layouts.app')

@section('content')

<div class="wrapper about-us">
        <!-- about-us-area start-->
        <div class="about-us-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">{{ $info->title }}</h5>
                        </div>
                    </div>
                    <div class="about-us-wrap row">
                        <div class="col-lg-6">
                            <div class="about-img"><img src="{{ Voyager::image( $info->image ) }}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-des">
                                <p>{!! $info->about_us !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-us-area end-->

        <!--choose us area start-->
        <div class="choose-us-area pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Why choose us</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-choose text-center">
                            <div class="choose-icon pos-rltv">
                                <i class="zmdi zmdi-shopping-cart-plus"></i>
                            </div>
                            <div class="choose-title">
                                <h5>{{ $info->reason_1_title }}</h5>
                            </div>
                            <div class="choose-des">
                                <p>{{ $info->reason_1_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-choose text-center">
                            <div class="choose-icon pos-rltv">
                                <i class="zmdi zmdi-headset-mic"></i>
                            </div>
                            <div class="choose-title">
                                <h5>{{ $info->reason_2_title }}</h5>
                            </div>
                            <div class="choose-des">
                                <p>{{ $info->reason_2_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="single-choose text-center">
                            <div class="choose-icon pos-rltv">
                                <i class="zmdi zmdi-format-strikethrough-s"></i>
                            </div>
                            <div class="choose-title">
                                <h5>{{ $info->reason_3_title }}</h5>
                            </div>
                            <div class="choose-des">
                                <p>{{ $info->reason_3_desc }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-md-none d-block d-lg-block">
                        <div class="single-choose text-center">
                            <div class="choose-icon pos-rltv">
                                <i class="zmdi zmdi-trending-up"></i>
                            </div>
                            <div class="choose-title">
                                <h5>{{ $info->reason_4_title }}</h5>
                            </div>
                            <div class="choose-des">
                                <p>{{ $info->reason_4_desc }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--choose us area start-->

        <!--out team area start-->
        <div class="our-team-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Our Team</h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="total-team team-carasoul row">
                            @foreach ($team_members as $team_member)                 
                            <div class="col-lg-3">
                                <!-- single team start-->
                                <div class="single-product single-member">
                                    <div class="product-img">
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <img alt="" src="{{ Voyager::image( $team_member->image ) }}">
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                            <li><a target="_blank" href="{{ $team_member->linkedin }}" data-tooltip="Linkedin" class="add-cart"
                                                        data-placement="left"><i class="zmdi zmdi-linkedin"></i></a>
                                                </li>
                                                <li><a target="_blank" href="{{ $team_member->facebook }}" data-tooltip="Facebook" class="w-list"><i
                                                            class="zmdi zmdi-facebook"></i></a></li>
                                                <li><a target="_blank" href="{{ $team_member->instagram }}" data-tooltip="Instagram" class="cpare"><i
                                                            class="zmdi zmdi-instagram"></i></a>
                                                </li>
                                                <li><a target="_blank" href="{{ $team_member->pinterest }}" data-tooltip="Pinterest" class="cpare"><i
                                                            class="zmdi zmdi-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="member-info">
                                            <h5>{{ $team_member->name }}</h5>
                                            <p>{{ $team_member->position }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- single team end-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--out team area end-->   
</div>

@endsection