<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>
    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/css/color1.css" id="colors">

    <link rel="shortcut icon" href="/png/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/png/favicon-apple.png">
    @yield('styles')
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div class="boxed" id="app">
    <div id="header" class="bg-fff">
        <div class="container">
            <div class="header-wrap clearfix">
                <div id="logo">
                    <a href="/"><img src="/png/logo.png" alt="farmfresh" width="157" height="29"
                                                data-retina="images/logo/logo@2x.png" data-width="157" data-height="29"></a>
                </div>
                <div class="nav-wrap flat-text-right style1">
                    <nav id="main-nav">
                        <ul class="menu">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('/products')}}">Products</a>
                            </li>
                            @guest
                                <li class="">
                                    <a href="{{url('/login')}}">Login</a>
                                </li>
                                <li>
                                    <a href="#">Register</a>
                                    <ul class="submenu">
                                        <li><a href="{{url('/register')}}">As Customer</a></li>
                                        <li><a href="{{url('/register')}}">As Farmer</a></li>
                                    </ul>
                                </li>
                            @endguest
                            @auth
                                <li class="">
                                    <a href="{{url('/home')}}">Dashboard</a>
                                </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
                <div class="extra-menu flat-text-right clearfix">
                    <div class="wrap-search-header">
                        <div class="search-header">
                            <form>
                                <input type="search" name="key" placeholder="Search for Courses">
                                <button class="btn-search"><span class="icon-search"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="cart nav-top-cart-wrapper">
                        <a href="#"><span class="bf-icon icon-cart"></span></a> <span
                                class="count-cart" style="background-color:#b3e364;">{{$cart->count()}}</span>
                        <div class="nav-shop-cart">
                            <div class="widget_shopping_cart_content">
                                <div class="woocommerce-min-cart-wrap">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget flat-text-center">
                                        @foreach($cart as $item)
                                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                                {{$item->product->product_name}}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{url('payments/cart')}}"
                                       class="flat-button btn-buy border-ra4 text-center" style="color:#b3e364">Checkout</a>
                                </div><!-- /.widget_shopping_cart_content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-button">
                    <span></span>
                </div>
            </div>
        </div>
    </div> <!-- #header -->

    @yield('content')

    <section class="section-images" style="padding:0">
        <img src="/Export/Newsletter-image.jpg">
    </section>

    <div class="bottom bg-15222e">
        <div class="container">
            <div class="row">
                <div class="  col-md-6">
                    <div class="copyright flat-text-left">
                        <p>© Copyright {{date('Y')}} <a href="#">{{config('app.name')}}</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a id="scroll-top"></a>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/parallax.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery-fancybox.js"></script>
<script src="/js/imagesloaded.min.js"></script>
<script src="/js/jquery-isotope.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/jquery.easing.js"></script>
<script src="/js/jquery.cookie.js"></script>
<script src="/js/smoothscroll.js"></script>
<script src="/js/main.js"></script>
<script src="/js/app.js"></script>
@yield('scripts')
</body>
</html>
