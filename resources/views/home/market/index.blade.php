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
                                    <li class="menu-item-has-children"><a href="{{route('/')}}">Shop Layout</a>
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
                <!-- Language -->
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">Language <i class="sli sli-arrow-down"></i></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Vietnam (VN)</a></li>
                        </ul>
                    </div>
                </div>
                <!-- //Language -->
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
                    <li class="active">Market</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area pt-95 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-top-bar">
                        <div class="select-shoing-wrap">
                            <div class="shop-select">
                                <select>
                                    <option value="">Sort by newness</option>
                                    <option value="">A to Z</option>
                                    <option value=""> Z to A</option>
                                    <option value="">In stock</option>
                                </select>
                            </div>
                            <p>Showing 1–12 of 20 result</p>
                        </div>
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-1" data-toggle="tab">
                                <i class="sli sli-grid"></i>
                            </a>
                            <a href="#shop-2" data-toggle="tab">
                                <i class="sli sli-menu"></i>
                            </a>
                        </div>
                    </div>
                    <div class="shop-bottom-area mt-35">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row ht-products">
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-1-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Chair</a></div>
                                                        <h4 class="ht-product-title"><a
                                                                href="{{route('product-details')}}">Demo Product
                                                                Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$60.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-2-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a
                                                                href="{{route('product-details')}}">Demo Product
                                                                Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$90.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-3-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Chair</a></div>
                                                        <h4 class="ht-product-title"><a
                                                                href="{{route('product-details')}}">Demo Product
                                                                Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-4-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Clock</a></div>
                                                        <h4 class="ht-product-title"><a
                                                                href="{{route('product-details')}}">Demo Product
                                                                Name</a></h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-5-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Clock</a></div>
                                                        <h4 class="ht-product-title"><a href="#">Demo Product Name</a>
                                                        </h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$60.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-6-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#">Demo Product Name</a>
                                                        </h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 90%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-7-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Chair</a></div>
                                                        <h4 class="ht-product-title"><a href="#">Demo Product Name</a>
                                                        </h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$30.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-8-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Chair</a></div>
                                                        <h4 class="ht-product-title"><a href="#">Demo Product Name</a>
                                                        </h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$60.00</span>
                                                            <span class="old">$90.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 100%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                    <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                        <!--Product Start-->
                                        <div
                                            class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                            <div class="ht-product-inner">
                                                <div class="ht-product-image-wrap">
                                                    <a href="{{route('product-details')}}" class="ht-product-image">
                                                        <img src="home/img/product/product-9-m.png"
                                                             alt="Universal Product Style"> </a>
                                                    <div class="ht-product-action">
                                                        <ul>
                                                            <li><a href="#" data-toggle="modal" data-target="#Market"><i
                                                                        class="sli sli-magnifier"></i><span
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ht-product-content">
                                                    <div class="ht-product-content-inner">
                                                        <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                                        <h4 class="ht-product-title"><a href="#">Demo Product Name</a>
                                                        </h4>
                                                        <div class="ht-product-price">
                                                            <span class="new">$50.00</span>
                                                            <span class="old">$80.00</span>
                                                        </div>
                                                        <div class="ht-product-ratting-wrap">
                                                            <span class="ht-product-ratting">
                                                                <span class="ht-product-user-ratting"
                                                                      style="width: 90%;">
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
                                                                        class="ht-product-action-tooltip">Quick View</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-heart"></i><span
                                                                        class="ht-product-action-tooltip">Add to Wishlist</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-refresh"></i><span
                                                                        class="ht-product-action-tooltip">Add to Compare</span></a>
                                                            </li>
                                                            <li><a href="#"><i class="sli sli-bag"></i><span
                                                                        class="ht-product-action-tooltip">Add to Cart</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ht-product-countdown-wrap">
                                                        <div class="ht-product-countdown"
                                                             data-countdown="2020/01/01"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Product End-->
                                    </div>
                                </div>
                            </div>
                            <div id="shop-2" class="tab-pane">
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="{{route('product-details')}}">
                                                    <img src="home/img/product/product-list-1-m.png"
                                                         alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal"
                                                       data-target="#Market"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="{{route('product-details')}}">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard The standard chunk.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                        <div class="ht-product-list-ratting">
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-wishlist" title="Add To Wishlist" href="#"><i
                                                                class="sli sli-heart"></i></a>
                                                        <a class="list-cart" title="Add To Cart" href="#"><i
                                                                class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                        <a class="list-refresh" title="Add To Compare" href="#"><i
                                                                class="sli sli-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="{{route('product-details')}}">
                                                    <img src="home/img/product/product-list-2-m.png"
                                                         alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal"
                                                       data-target="#Market"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="{{route('product-details')}}">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard The standard chunk.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$50.00</span>
                                                        </div>
                                                        <div class="ht-product-list-ratting">
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-wishlist" title="Add To Wishlist" href="#"><i
                                                                class="sli sli-heart"></i></a>
                                                        <a class="list-cart" title="Add To Cart" href="#"><i
                                                                class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                        <a class="list-refresh" title="Add To Compare" href="#"><i
                                                                class="sli sli-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="{{route('product-details')}}">
                                                    <img src="home/img/product/product-list-3-m.png"
                                                         alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal"
                                                       data-target="#Market"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="{{route('product-details')}}">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard The standard chunk.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$40.00</span>
                                                            <span class="old">$70.00</span>
                                                        </div>
                                                        <div class="ht-product-list-ratting">
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-wishlist" title="Add To Wishlist" href="#"><i
                                                                class="sli sli-heart"></i></a>
                                                        <a class="list-cart" title="Add To Cart" href="#"><i
                                                                class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                        <a class="list-refresh" title="Add To Compare" href="#"><i
                                                                class="sli sli-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="product-list-img">
                                                <a href="{{route('product-details')}}">
                                                    <img src="home/img/product/product-list-4-m.png"
                                                         alt="Universal Product Style">
                                                </a>
                                                <div class="product-quickview">
                                                    <a href="#" title="Quick View" data-toggle="modal"
                                                       data-target="#Market"><i class="sli sli-magnifier-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 align-self-center">
                                            <div class="shop-list-content">
                                                <h3><a href="{{route('product-details')}}">Demo Product Name</a></h3>
                                                <p>It has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard The standard chunk.</p>
                                                <span>Chair</span>
                                                <div class="shop-list-price-action-wrap">
                                                    <div class="shop-list-price-ratting">
                                                        <div class="ht-product-list-price">
                                                            <span class="new">$90.00</span>
                                                        </div>
                                                        <div class="ht-product-list-ratting">
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                            <i class="sli sli-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="ht-product-list-action">
                                                        <a class="list-wishlist" title="Add To Wishlist" href="#"><i
                                                                class="sli sli-heart"></i></a>
                                                        <a class="list-cart" title="Add To Cart" href="#"><i
                                                                class="sli sli-basket-loaded"></i> Add to Cart</a>
                                                        <a class="list-refresh" title="Add To Compare" href="#"><i
                                                                class="sli sli-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pro-pagination-style text-center mt-30">
                            <ul>
                                <li><a class="prev" href="#"><i class="sli sli-arrow-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next" href="#"><i class="sli sli-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-style mr-30">
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Search </h4>
                            <div class="pro-sidebar-search mb-50 mt-25">
                                <form class="pro-sidebar-search-form" action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button>
                                        <i class="sli sli-magnifier"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="pro-sidebar-title">Location </h4>
                            <div class="sidebar-widget-list mt-30">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox"> <a href="#">Ha Noi capital </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Da Nang city</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Ho Chi Minh city</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-45">
                            <h4 class="pro-sidebar-title">Filter By Price </h4>
                            <div class="price-filter mt-10">
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price"/>
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">What do you want to buy? </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Vegetable <span>20</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Raw Meat <span>100</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Frozen Commodity
                                                <span>100</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40">
                            <h4 class="pro-sidebar-title">Where do you want to go to the market? </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Traditional markets</a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">GO Supermarket </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Lotte Market </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Tag </h4>
                            <div class="sidebar-widget-tag mt-25">
                                <ul>
                                    <li><a href="#">raw meat</a></li>
                                    <li><a href="{{route('market')}}">market</a></li>
                                    <li><a href="#">Lotte Market</a></li>
                                    <li><a href="#">GO Supermarket</a></li>
                                    <li><a href="#">Traditional markets</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
