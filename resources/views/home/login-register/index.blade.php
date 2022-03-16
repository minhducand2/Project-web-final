@extends('home.layout.master')

@section('Content')

    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="sli sli-close"></i></a>
        <div class="header-mobile-aside-wrap">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="sli sli-magnifier"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap">
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{route('/')}}">Home</a></li>
                            <li class="menu-item-has-children "><a href="{{route('shop')}}">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="{{route('shop')}}">Shop Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('asus')}}">ASUS</a></li>
                                            <li><a href="{{route('msi')}}">MSI</a></li>
                                            <li><a href="{{route('dell')}}">DELL</a></li>
                                            <li><a href="{{route('shop')}}">Lenovo</a></li>
                                            <li><a href="{{route('macbook')}}">MacBook</a></li>
                                            <li><a href="{{route('samsum')}}">SAMSUNG</a></li>
                                            <li><a href="{{route('iphone')}}">Iphone</a></li>
                                            <li><a href="{{route('oppo')}}">Oppo</a></li>
                                            <li><a href="{{route('vivo')}}">ViVo</a></li>
                                            <li><a href="{{route('nokia')}}">Nokia </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">products details</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('phone-accessories')}}">Phone accessories</a></li>
                                            <li><a href="{{route('laptop-accessories')}}">Laptop accessories</a></li>
                                            <li><a href="{{route('audio-equipments')}}">Audio equipments</a></li>
                                            <li><a href="{{route('smart-home-device')}}">Smart home device</a></li>
                                            <li><a href="{{route('archive-device')}}">Archive device</a></li>
                                            <li><a href="{{route('t-shirt')}}">T-shirt</a></li>
                                            <li><a href="{{route('trousers')}}">Trousers</a></li>
                                            <li><a href="{{route('hand-bag')}}">Hand Bag</a></li>
                                            <li><a href="{{route('fashion-accessories')}}">Fashion Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('market')}}">Market </a></li>
                            <li class="menu-item-has-children"><a href="#">pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('checkout')}}">checkout </a></li>
                                    <li><a href="{{route('compare-page')}}">compare-page</a></li>
                                    <li><a href="{{route('wishlist')}}">wishlist </a></li>
                                    <li><a href="{{route('my-account')}}">my account </a></li>
                                    <li><a href="{{route('contact')}}">contact us </a></li>
                                    <li><a href="{{route('login-register')}}">login/register </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-curr-lang-wrap">
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">Language <i class="sli sli-arrow-down"></i></a>
                    <!-- Language -->
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Vietnam (US)</a></li>
                        </ul>
                    </div>
                    <!-- //Language -->
                </div>
                <div class="single-mobile-curr-lang">
                    <a class="mobile-currency-active" href="#">Currency <i class="sli sli-arrow-down"></i></a>
                    <!-- Money -->
                    <div class="lang-curr-dropdown curr-dropdown-active">
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">VND</a></li>
                        </ul>
                    </div>
                    <!-- //Money -->
                </div>
                <!-- Login, Creat Account, My Account-->
                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="sli sli-arrow-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            <li><a href="{{route('login-register')}}">Login</a></li>
                            <li><a href="{{route('login-register')}}">Creat Account</a></li>
                            <li><a href="{{route('my-account')}}">My Account</a></li>
                        </ul>
                    </div>
                </div>
                <!-- //Login, Creat Account, My Account-->
            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="sli sli-social-facebook"></i></a>
                <a class="twitter" href="#"><i class="sli sli-social-twitter"></i></a>
                <a class="pinterest" href="#"><i class="sli sli-social-pinterest"></i></a>
                <a class="instagram" href="#"><i class="sli sli-social-instagram"></i></a>
                <a class="google" href="#"><i class="sli sli-social-google"></i></a>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{route('/')}}">Home</a>
                    </li>
                    <li class="active">login / register</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <input name="user-email" placeholder="Email" type="email">
                                            <div class="button-box">
                                                <button type="submit">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
