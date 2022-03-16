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
                                    <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('asus')}}">ASUS</a></li>
                                            <li><a href="{{route('msi')}}">MSI</a></li>
                                            <li><a href="{{route('dell')}}">DELL</a></li>
                                            <li><a href="{{route('lenovol')}}">Lenovo</a></li>
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
                            <li><a href="{{route('contact')}}">contact-us</a></li>
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
                            <li><a href="#">Vietnam (VN)</a></li>
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
                            <li><a href="#">EUR</a></li>
                        </ul>
                    </div>
                    <!-- //Money -->
                </div>
                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="sli sli-arrow-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            <li><a ref="{{route('login-register')}}">Login</a></li>
                            <li><a ref="{{route('login-register')}}">Creat Account</a></li>
                            <li><a href="{{route('my-account')}}">My Account</a></li>
                        </ul>
                    </div>
                </div>
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
    <!-- slide Wooden Craft -->
    <div class="slider-area section-padding-1">
        <div class="slider-active-2 owl-carousel nav-style-2 dot-style-1">
            <!-- slide -->
            <div class="single-slider slider-height-2 bg-aliceblue">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content pt-180 slider-animated-1">
                                <h1 class="animated">Shop ecommerce</h1>
                                <p class="animated">Welcome to Shop ecommerce.</p>
                                <div class="slider-btn btn-hover">
                                    <a class="animated" href="{{route('shop')}}">Shop Now <i
                                            class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- image slide -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-2 slider-animated-1">
                                <img class="animated" src="home/img/slider/slider-hm2-1.png" alt="">
                            </div>
                        </div>
                        <!-- //image slide -->
                    </div>
                </div>
            </div>
            <!-- //slide -->
            <!-- slide -->
            <div class="single-slider slider-height-2 bg-aliceblue">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content pt-180 slider-animated-1">
                                <h1 class="animated">Shop ecommerce</h1>
                                <p class="animated">Welcome to Shop ecommerce.</p>
                                <div class="slider-btn btn-hover">
                                    <a class="animated" href="{{route('shop')}}">Shop Now <i
                                            class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>

                        </div>
                        <!-- image slide -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-2 slider-animated-1">
                                <img class="animated" src="home/img/slider/slider-hm3-1.png" alt="">
                            </div>
                        </div>
                        <!-- //image slide -->
                    </div>
                </div>
            </div>
            <!-- //slide -->
            <!-- slide -->
            <div class="single-slider slider-height-2 bg-aliceblue">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-content pt-180 slider-animated-1">
                                <h1 class="animated">Shop ecommerce</h1>
                                <p class="animated">Welcome to Shop ecommerce.</p>
                                <div class="slider-btn btn-hover">
                                    <a class="animated" href="{{route('market')}}">Shop Now <i
                                            class="sli sli-basket-loaded"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- image slide -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                            <div class="slider-single-img-2 slider-animated-1">
                                <img class="animated" src="home/img/slider/slider-hm2-2.png" alt="">
                            </div>
                        </div>
                        <!-- //image slide -->
                    </div>
                </div>
            </div>
            <!-- //slide -->
        </div>
    </div>
    <!-- //slide Wooden Craft -->
    <div class="banner-area pt-100 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner mb-30 scroll-zoom">
                        <a href="{{route('shop')}}"><img class="animated" src="home/img/banner/banner-6.png" alt=""></a>
                        <div class="banner-content-2 banner-position-5">
                            <h4>FASHION</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner mb-30 scroll-zoom">
                        <a href="{{route('shop')}}"><img class="animated" src="home/img/banner/banner-7.png" alt=""></a>
                        <div class="banner-content-2 banner-position-5">
                            <h4>LAPTOP</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-banner mb-30 scroll-zoom">
                        <a href="{{route('market')}}"><img class="animated" src="home/img/banner/banner-8.png"
                                                           alt=""></a>
                        <div class="banner-content-2 banner-position-5">
                            <h4>market</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30 scroll-zoom">
                        <a href="{{route('shop')}}"><img class="animated" src="home/img/banner/banner-9.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30 text-center scroll-zoom">
                        <a href="{{route('shop')}}"><img class="animated" src="home/img/banner/banner-10.png"
                                                         alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product -->
    <div class="product-area pb-70">
        <div class="container">
            <div class="section-title text-center pb-45">
                <h2>Flash Sale</h2>
                <p> Flash Sale is a special promotion on</p>
            </div>
            <!--Product-->
            <div class="arrivals-wrap scroll-zoom">
                <div class="ht-products product-slider-active-2 owl-carousel">

                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <span class="ht-product-label ht-product-label-left">NEW</span>
                                <span class="ht-product-label ht-product-label-right">Sale</span>
                                <a href="{{route('product-details')}}" class="ht-product-image"> <img
                                        src="home/img/product/product-9.png" alt="Universal Product Style"> </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Dress</a></div>
                                    <h4 class="ht-product-title"><a href="#">Laptop Zenbook</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$120.00</span>
                                        <span class="old">$220.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->

                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <span class="ht-product-label ht-product-label-left">NEW</span>
                                <span class="ht-product-label ht-product-label-right">Sale</span>
                                <a href="{{route('product-details')}}" class="ht-product-image"> <img
                                        src="home/img/product/product-10.png" alt="Universal Product Style"> </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Dress </a></div>
                                    <h4 class="ht-product-title"><a href="#">Iphone 13 promax</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$50.00</span>
                                        <span class="old">$100.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 90%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->

                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <span class="ht-product-label ht-product-label-left">NEW</span>
                                <span class="ht-product-label ht-product-label-right">Sale</span>
                                <a href="{{route('product-details')}}" class="ht-product-image"> <img
                                        src="home/img/product/product-11.png" alt="Universal Product Style"> </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Dress</a></div>
                                    <h4 class="ht-product-title"><a href="#">macbook air m2</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$1000.00</span>
                                        <span class="old">$3000.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->

                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <span class="ht-product-label ht-product-label-left">NEW</span>
                                <span class="ht-product-label ht-product-label-right">Sale</span>
                                <a href="{{route('product-details')}}" class="ht-product-image"> <img
                                        src="home/img/product/product-12.png" alt="Universal Product Style"> </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                    class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Dress </a></div>
                                    <h4 class="ht-product-title"><a href="#">moxpad x3e</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">$16.00</span>
                                        <span class="old">$20.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 90%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span
                                                    class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span
                                                    class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span
                                                    class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span
                                                    class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                </div>
            </div>
            <!--//Product-->
        </div>
    </div>
    <!-- //product -->

    <div class="banner-area pt-80 pb-80 section-margin-1 bg-aliceblue">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7 col-sm-7">
                    <div class="banner-img-2 pr-10 scroll-zoom">
                        <a href="{{route('market')}}"><img src="home/img/banner/banner-11.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-5">
                    <div class="banner-bg-content pl-100 scroll-zoom">
                        <h3>35% off <br>Black Monday</h3>
                        <h2>Lighting For <br> Home.</h2>
                        <a href="{{route('market')}}">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area pt-95 pb-65">
        <div class="container">
            <div class="section-title text-center pb-45">
                <h2>New Blog Posts</h2>
                <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img">
                            <a href="{{route('blog')}}"><img src="home/img/blog/blog-3.png" alt=""></a>
                        </div>
                        <div class="blog-content blog-content-mrg-2">
                            <div class="blog-meta blog-meta-mrg">
                                <ul>
                                    <li><a href="#">23 December 2019 </a></li>
                                    <li><a href="#"> 24 View </a></li>
                                    <li><a href="#">4 likes</a></li>
                                </ul>
                            </div>
                            <h3><a href="#">Distracted by the readable content</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img">
                            <a href="{{route('blog')}}"><img src="home/img/blog/blog-4.png" alt=""></a>
                        </div>
                        <div class="blog-content blog-content-mrg-2">
                            <div class="blog-meta blog-meta-mrg">
                                <ul>
                                    <li><a href="#">23 December 2019 </a></li>
                                    <li><a href="#"> 24 View </a></li>
                                    <li><a href="#">4 likes</a></li>
                                </ul>
                            </div>
                            <h3><a href="{{route('blog')}}">Distracted by the readable content</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-wrap mb-30 scroll-zoom">
                        <div class="blog-img">
                            <a href="{{route('blog')}}"><img src="home/img/blog/blog-5.png" alt=""></a>
                        </div>
                        <div class="blog-content blog-content-mrg-2">
                            <div class="blog-meta blog-meta-mrg">
                                <ul>
                                    <li><a href="#">23 December 2019 </a></li>
                                    <li><a href="#"> 24 View </a></li>
                                    <li><a href="#">4 likes</a></li>
                                </ul>
                            </div>
                            <h3><a href="{{route('blog')}}">Distracted by the readable content</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="instagram-area section-margin-1">
        <div class="container">
            <div class="section-title text-center pb-45">
                <h2>Instagram Feed</h2>
                <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical</p>
            </div>
        </div>
        <div class="instagram-feed-thumb">
            <div id="instafeed" class="instagram-carousel owl-carousel" data-userid="6665768655"
                 data-accesstoken="6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5">
            </div>
        </div>
    </div>
@endsection

@push('Style')
    <!-- Style in file -->
@endpush


@push('Script')
    <!-- Script in file -->
@endpush
