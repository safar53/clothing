<!doctype html>
<html class="no-js" lang="en">

<head>
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
                                        <li><a href="{{route('home')}}">HOME</a></li>
                                        <li><a href="{{route('shop.category')}}">SHOP</a></li>
                                        <li><a href="{{route('blog.index')}}">BLOG</a></li>
                                        <li><a href="{{route('contact')}}">CONTACT</a></li>
                                        <li><a href="{{route('about.index')}}">ABOUT</a></li>
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
                                                    <li><a href="index.html">Home</a>
                                                        <ul>
                                                            <li><a class="active" href="index.html">Home One</a></li>
                                                            <li><a href="index-2.html">Home Two</a></li>
                                                            <li><a href="index-boxed-01.html">Home Three (Boxed)</a>
                                                            </li>
                                                            <li><a href="index-boxed-02.html">Home Four (Boxed)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Man</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Shirt 01</a></li>
                                                            <li><a href="shop.html">Shirt 02</a></li>
                                                            <li><a href="shop.html">Shirt 03</a></li>
                                                            <li><a href="shop.html">Shirt 04</a></li>
                                                            <li><a href="shop.html">Pant 01</a></li>
                                                            <li><a href="shop.html">Pant 02</a></li>
                                                            <li><a href="shop.html">Pant 03</a></li>
                                                            <li><a href="shop.html">Pant 04</a></li>
                                                            <li><a href="shop.html">T-Shirt 01</a></li>
                                                            <li><a href="shop.html">T-Shirt 02</a></li>
                                                            <li><a href="shop.html">T-Shirt 03</a></li>
                                                            <li><a href="shop.html">T-Shirt 04</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Sharee 01</a></li>
                                                            <li><a href="shop.html">Sharee 02</a></li>
                                                            <li><a href="shop.html">Sharee 03</a></li>
                                                            <li><a href="shop.html">Sharee 04</a></li>
                                                            <li><a href="shop.html">Sharee 05</a></li>
                                                            <li><a href="shop.html">Lahenga 01</a></li>
                                                            <li><a href="shop.html">Lahenga 02</a></li>
                                                            <li><a href="shop.html">Lahenga 03</a></li>
                                                            <li><a href="shop.html">Lahenga 04</a></li>
                                                            <li><a href="shop.html">Lahenga 05</a></li>
                                                            <li><a href="shop.html">Sandel 01</a></li>
                                                            <li><a href="shop.html">Sandel 02</a></li>
                                                            <li><a href="shop.html">Sandel 03</a></li>
                                                            <li><a href="shop.html">Sandel 04</a></li>
                                                            <li><a href="shop.html">Sandel 05</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shortcode</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shortcode-banner.html"
                                                                    target="_blank">shortcode-banner</a></li>
                                                            <li><a href="shortcode-best-top-on-sale-slider.html"
                                                                    target="_blank">too-on-sale</a></li>
                                                            <li><a href="shortcode-blog-item.html" target="_blank">Short
                                                                    Blog Item</a></li>
                                                            <li><a href="shortcode-brand-prodcut.html"
                                                                    target="_blank">Brand Product</a></li>
                                                            <li><a href="shortcode-brand-slider.html"
                                                                    target="_blank">Brand Slider</a></li>

                                                            <li><a href="shortcode-breadcrumb.html"
                                                                    target="_blank">Breadcrumb</a></li>
                                                            <li><a href="shortcode-related-product.html"
                                                                    target="_blank">Related Product</a></li>
                                                            <li><a href="shortcode-service.html"
                                                                    target="_blank">Service</a></li>
                                                            <li><a href="shortcode-skill.html" target="_blank">Skill</a>
                                                            </li>
                                                            <li><a href="shortcode-slider.html"
                                                                    target="_blank">Slider</a></li>

                                                            <li><a href="shortcode-team.html" target="_blank">Team</a>
                                                            </li>
                                                            <li><a href="shortcode-testimonial.html"
                                                                    target="_blank">Testimonial</a></li>
                                                            <li><a href="shortcode-why-choose-us.html"
                                                                    target="_blank">Why Choose Us</a></li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="#">Pages</a>
                                                        <ul class="single-mega-item coloum-4">
                                                            <li><a href="about-us.html" target="_blank">About-us</a>
                                                            </li>
                                                            <li><a href="blog.html" target="_blank">Blog</a></li>
                                                            <li><a href="blog-right.html" target="_blank">Blog-Right</a>
                                                            </li>
                                                            <li><a href="single-blog.html" target="_blank">Single
                                                                    Blog</a></li>
                                                            <li><a href="single-blog-right.html" target="_blank">Single
                                                                    Blog Right</a></li>
                                                            <li><a href="blog-full.html"
                                                                    target="_blank">Blog-Fullwidth</a></li>
                                                            <li class="menu-title uppercase">pages-02</li>
                                                            <li><a href="blog-full-right.html" target="_blank">Blog Ful
                                                                    Rightl</a></li>
                                                            <li><a href="cart.html" target="_blank">Cart</a></li>
                                                            <li><a href="checkout.html" target="_blank">Checkout</a>
                                                            </li>
                                                            <li><a href="compare.html" target="_blank">Compare</a></li>
                                                            <li><a href="complete-order.html" target="_blank">Complete
                                                                    Order</a></li>
                                                            <li><a href="contact-us.html" target="_blank">Contact US</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="login.html" target="_blank">Login</a></li>
                                                            <li><a href="my-account.html" target="_blank">My Account</a>
                                                            </li>
                                                            <li><a href="shop-full-grid.html" target="_blank">Shop Full
                                                                    Grid</a></li>
                                                            <li><a href="shop-full-list.html" target="_blank">Shop Full
                                                                    List</a></li>
                                                            <li><a href="shop-list-right-sidebar.html"
                                                                    target="_blank">Shop List Right</a></li>
                                                            <li><a href="shop-list.html" target="_blank">Shop List</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="shop-right-sidebar.html" target="_blank">Shop
                                                                    Right</a></li>
                                                            <li><a href="shop.html" target="_blank">Shop</a></li>
                                                            <li><a href="single-product.html" target="_blank">Single
                                                                    Prodcut</a></li>
                                                            <li><a href="wishlist.html" target="_blank">Wishlist</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about-us.html">about</a></li>
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
                                <h5>Categories</h5>
                            </div>
                            <div class="informatoin">
                                <ul>
                                    @foreach ($categories as $category)
                                    <li>
                                        <a href="{{route('shop.category',['category' => $category->id])}}">{{$category->name}}</a>
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