<!DOCTYPE html>
<html lang="vi">
<head>
    <title>@yield('title', 'Lighting Store | Home')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/simpleCart.min.js') }}"></script>
    <script src="{{ asset('js/memenu.js') }}"></script>
    <script>
        $(function() {
            $(".memenu").memenu();
        });
    </script>
</head>

<body>
    <!-- HEADER -->
    <div class="header-top">
        <div class="header-bottom">
            <div class="logo">
                <h1><a href="{{ url('/') }}">Lighting</a></h1>
            </div>

            <div class="top-nav">
                <ul class="memenu skyblue">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('product') ? 'active' : '' }}"><a href="{{ url('/product') }}">Products</a></li>
                     <li class="{{ Request::is('accessories') ? 'active' : '' }}"><a href="{{ url('/accessories') }}">Accessories</a></li>
                    <li class="{{ Request::is('typo') ? 'active' : '' }}"><a href="{{ url('/typo') }}">Typo</a></li>
                    <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="cart box_1">
                <a href="{{ url('/checkout') }}">
                    <div class="total">
                        <span class="simpleCart_total"></span> 
                        (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)
                    </div>
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>

    <!-- PHẦN RIÊNG CỦA TRANG -->
    <main>
        @yield('content')
    </main>

    <!-- NEWSLETTER -->
    <div class="subscribe">
        <div class="container">
            <h3>Newsletter</h3>
            <form>
                <input type="text" class="text" value="Email" onfocus="this.value='';" onblur="if (this.value=='') this.value='Email';">
                <input type="submit" value="Subscribe">
            </form>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 about-us">
                    <h3>About Us</h3>
                    <p>Maecenas nec auctor sem. Vivamus porttitor tincidunt elementum nisi a, euismod rhoncus urna.</p>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h3>Information</h3>
                    <ul class="nav-bottom">
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">New Products</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Our Stores</a></li>
                        <li><a href="#">Best Sellers</a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h3>More Info</h3>
                    <ul class="nav-bottom">
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Membership</a></li>
                    </ul>
                </div>
                <div class="col-md-3 ftr-grid">
                    <h3>Categories</h3>
                    <ul class="nav-bottom">
                        <li><a href="#">Car Lights</a></li>
                        <li><a href="#">LED Lights</a></li>
                        <li><a href="#">Decorates</a></li>
                        <li><a href="#">Wall Lights</a></li>
                        <li><a href="#">Protectors</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="copywrite">
        <div class="container">
            <div class="copy">
                <p>© 2025 Lighting. All Rights Reserved | Design by 
                    <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
                </p>
            </div>
            <div class="social">
                <a href="#"><i class="facebook"></i></a>
                <a href="#"><i class="twitter"></i></a>
                <a href="#"><i class="dribble"></i></a>
                <a href="#"><i class="google"></i></a>
                <a href="#"><i class="youtube"></i></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>
