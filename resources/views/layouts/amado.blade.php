<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
@include('layouts._favicons')

<!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('amado/')}}/css/core-style.css">
    {{--    <link rel="stylesheet" href="{{asset('amado/')}}/style.css">--}}

</head>

<body>
<!-- Search Wrapper Area Start -->
<div class="search-wrapper section-padding-100">
    <div class="search-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-content">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type your keyword...">
                        <button type="submit"><img src="{{asset('amado/')}}/img/core-img/search.png" alt=""></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="/"><img src="{{asset('images/logo1.png')}}" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area clearfix">
        <!-- Close Icon -->
        <div class="nav-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <!-- Logo -->
        <div class="logo text-center">
            <a href="/"><img src="{{asset('images/logo1.png')}}" alt=""></a>
            <h3 class="m-0" style="margin-top:-10px;">VOGA</h3>
            <div style="margin-top:-5%;">your game partner</div>
        </div>
        <!-- Amado Nav -->
        <nav class="amado-nav">
            <ul>
                <li class="active"><a href="/">Shop</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('helpdesk') }}">Helpdesk</a></li>
                {{--<li><a href="product-details.html">Product</a></li>--}}
                {{--<li><a href="cart.html">Cart</a></li>--}}
                {{--<li><a href="checkout.html">Checkout</a></li>--}}
            </ul>
        </nav>

        <!-- Cart Menu -->
        <div class="cart-fav-search mt-30">
            <a href="{{ route('cart.show') }}" class="cart-nav"><b class="fa fa-shopping-cart"></b>
                Cart
                <span>
                    @if (Cart::isNotEmpty())
                        ({{ Cart::itemCount() }})
                    @endif
                </span>
            </a>
            {{--<a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>--}}
            {{--<a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>--}}
        </div>

        <!-- Button Group -->
        <div class="amado-btn-group text-center mt-30 mb-100">
            @guest
                <a href="{{ route('login') }}" class="btn amado-btn mb-15">Login</a>
                <a href="{{ route('register') }}" class="btn btn-dark active">Register</a>
            @else
                @role('admin')
                <a href="{{ config('konekt.app_shell.ui.url') }}" class="nav-link text-uppercase">Admin</a>
                @endrole
                <a href="#" class="btn amado-btn mb-15 rounded"><b class="fa fa-user"></b> {{ Auth::user()->name }}</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-dark active" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            @endguest
        </div>
        <!-- Social Button -->
        <div class="social-info d-flex justify-content-center{{--justify-content-between--}}">
            {{--<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>--}}
            <a href="https://www.instagram.com/voga.vouchergame/?hl=id" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            &nbsp;
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            {{--<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>--}}
        </div>
    </header>
    <!-- Header Area End -->

    @yield('products')
</div>
<!-- ##### Main Content Wrapper End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        {{--<a href="index.html"><img src="{{asset('amado/')}}/img/core-img/logo2.png" alt=""></a>--}}
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved
                    {{--| This template is made with <i class="fa fa-heart-o"--}}
                    {{--aria-hidden="true"></i> by <a--}}
                    {{--href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavContent" aria-controls="footerNavContent"
                                    aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i>
                            </button>
                            {{--<div class="collapse navbar-collapse" id="footerNavContent">--}}
                            {{--<ul class="navbar-nav ml-auto">--}}
                            {{--<li class="nav-item active">--}}
                            {{--<a class="nav-link" href="index.html">Home</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="shop.html">Shop</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="product-details.html">Product</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="cart.html">Cart</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="checkout.html">Checkout</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</div>--}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="{{asset('amado/')}}/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="{{asset('amado/')}}/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{asset('amado/')}}/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="{{asset('amado/')}}/js/plugins.js"></script>
<!-- Active js -->
<script src="{{asset('amado/')}}/js/active.js"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5baba7e59d44382222fc068f/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=125258574"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'GA_TRACKING_ID');
</script>

</body>

</html>