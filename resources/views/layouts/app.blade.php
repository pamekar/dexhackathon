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

    <link rel="shortcut icon" href="png/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="png/favicon-apple.png">
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div class="boxed" id="app">
    <div id="header" class="bg-fff">
        <div class="container">
            <div class="header-wrap clearfix">
                <div id="logo">
                    <a href="index-2.html"><img src="png/logo.png" alt="bookflare" width="157" height="29" data-retina="images/logo/logo@2x.png" data-width="157" data-height="29"></a>
                </div>
                <div class="nav-wrap flat-text-right style1">
                    <nav id="main-nav">
                        <ul class="menu" >
                            <li>
                                <a href="#">HOME</a>
                                <ul class="submenu">
                                    <li ><a href="index-2.html">HOME 1</a></li>
                                    <li><a href="index2.html">HOME 2</a></li>
                                    <li><a href="index3.html">HOME 3</a></li>
                                    <li><a href="index4.html">HOME 4</a></li>
                                    <li><a href="index-animate.html">HOME ANIMATE</a></li>
                                </ul>
                            </li>
                            <li  class="active">
                                <a href="#">COURSES</a>
                                <ul class="submenu">
                                    <li><a href="courses-grid-v1.html">COURSES V1</a></li>
                                    <li><a href="courses-grid-v2.html">COURSES V2</a></li>
                                    <li class="active"><a href="courses-grid-v3.html">COURSES V3</a></li>
                                    <li><a href="courses-single.html">COURSES SINGLE</a></li>
                                </ul>
                            </li>
                            <li><a href="instructors.html">INSTRUCTORS</a></li>
                            <li>
                                <a href="#">EVENTS</a>
                                <ul class="submenu">
                                    <li><a href="event-v1.html">EVENT V1</a></li>
                                    <li><a href="event-v2.html">EVENT V2</a></li>
                                    <li><a href="event-single.html">EVENT SINGLE</a></li>
                                </ul>
                            </li>
                            <li >
                                <a href="#">PAGES</a>
                                <ul class="submenu">
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="about-us.html">ABOUT US</a></li>
                                    <li class="item-has-child">
                                        <a href="#">SHOP</a>
                                        <ul class="submenu">
                                            <li ><a href="shop.html">SHOP</a></li>
                                            <li><a href="shop-single.html">SHOP SINGLE</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">BLOG</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">BLOG</a></li>
                                    <li><a href="blog-single.html">BLOG SINGLE</a></li>
                                </ul>
                            </li>
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
                        <a href="#"><span class="bf-icon icon-cart"></span></a> <span class="count-cart">0</span>
                        <div class="nav-shop-cart">
                            <div class="widget_shopping_cart_content">
                                <div class="woocommerce-min-cart-wrap">
                                    <ul class="woocommerce-mini-cart cart_list product_list_widget flat-text-center">
                                        <li class="woocommerce-mini-cart-item mini_cart_item">
                                            <span>No Items in Shopping Cart</span>
                                        </li>
                                    </ul>
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

    <section class="flat-feature parallax parallax2">
        <div class="container">
            <div class="row flat-iconbox style1">
                <div class="col-lg-4 col-md-4">
                    <div class="iconbox style1 left">
                        <div class="iconbox-icon">
                            <span class="icon-book"></span>
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title">80,000 ONLINE COURSES</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="iconbox style1 center">
                        <div class="iconbox-icon">
                            <span class="icon-people"></span>
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title">EXPERT INSTRUCTION</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="iconbox style1 right">
                        <div class="iconbox-icon">
                            <span class="icon-key"></span>
                        </div>
                        <div class="iconbox-content">
                            <h5 class="title">LIFETIME ACCESS</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget-about">
                        <div id="logo-ft">
                            <a href="index-2.html"><img src="png/logo-ft.png" alt="bookflare"  width="157" height="29" data-retina="images/logo/logo-ft@2x.png" data-width="157" data-height="29"></a>
                        </div>
                        <p class="description">We are a new design studio based in USA. We have over 20 years of combined experience, and know a thing or two about designing websites and mobile apps.</p>
                        <div class="list-info">
                            <ul>
                                <li class="address"><a href="#">1107 Wood Street Saginaw, MI New York 48607</a></li>
                                <li class="phone"><a href="#">+123 345 678 000</a></li>
                                <li class="mail"><a href="#">info@example.com</a></li>
                            </ul>
                        </div>
                        <div class="socails">
                            <ul class="list">
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
                                <li><a href="#"><span class="fa fa-facebook-official"></span></a></li>
                                <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                <li><a href="#"><span class="fa fa-pinterest-square"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget-link widget-ft">
                        <h6 class=" widget-title">USEFULL LINK</h6>
                        <div class="list-wrap clearfix">
                            <ul class="one-of-two">
                                <li><a href="#">Register Activation Key</a></li>
                                <li><a href="#"> Our Plans</a></li>
                                <li><a href="#"> Government Solutions</a></li>
                                <li><a href="#">Academic Solutions</a></li>
                                <li><a href="#">Intellectual Property</a></li>
                            </ul>
                            <ul class="one-of-two">
                                <li><a href="#">Free Trial</a></li>
                                <li><a href="#"> Support</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget-recent-work widget-ft">
                        <h6 class="widget-title">RECENT WORK</h6>
                        <div class="flat-recentOwl"  data-column="4" data-column2="3" data-loop="true"  data-column3="2" data-gap ="0" data-dots="false" data-nav="true" >
                            <div class="flat-imgbox style1 clearfix owl-carousel">
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-1.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-5.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-2.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-6.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-3.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-7.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-4.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-8.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-1.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-2.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-3.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-4.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-5.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-6.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-7.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="imgbox style1 transition-vline">
                                        <a href="#">
                                            <div class="imgbox-img img-vline">
                                                <img src="png/work-8.png" alt="bookflare">
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-btn">
                            <a href="#" class="btn-view-more">VIEW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="bottom bg-15222e">
        <div class="container">
            <div class="row">
                <div class="  col-md-6">
                    <div class="copyright flat-text-left">
                        <p>© Copyright 2018 <a href="#">tophive</a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="  col-md-6">
                    <div class="widget flat-text-right no-border">
                        <ul class="list">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
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
<script src="/js/switcher.js"></script>
<script src="/js/main.js"></script>
<script src="/js/app.js"></script>
</body>
</html>
