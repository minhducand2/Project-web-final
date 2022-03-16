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
                            <li><a href="#">Vietnam (VN)</a></li>
                        </ul>
                    </div>
                    <!-- //Language -->
                </div>
                <div class="single-mobile-curr-lang">
                    <a class="mobile-currency-active" href="#">Currency <i class="sli sli-arrow-down"></i></a>
                    <!-- //Money -->
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
                    <li class="active">compare page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- compare main wrapper start -->
    <div class="compare-page-wrapper pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Compare Page Content Start -->
                    <div class="compare-page-content-wrap">
                        <div class="compare-table table-responsive">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <a href="{{route('/')}}" class="image">
                                            <img class="img-fluid" src="home/img/product/product-1.png"
                                                 alt="Compare Product">
                                        </a>
                                        <a href="#" class="category">Chair</a>
                                        <a href="{{route('/')}}" class="title">Demo Product Name</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="{{route('/')}}" class="image">
                                            <img class="img-fluid" src="home/img/product/product-2.png"
                                                 alt="Compare Product">
                                        </a>
                                        <a href="#" class="category">Lamp </a>
                                        <a href="{{route('/')}}" class="title">Demo Product Name</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="{{route('/')}}" class="image">
                                            <img class="img-fluid" src="home/img/product/product-3.png"
                                                 alt="Compare Product">
                                        </a>
                                        <a href="#" class="category">Chair</a>
                                        <a href="{{route('/')}}" class="title">Demo Product Name</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>Samsome Note Book Pro 5 is an the best Laptop on this budgeted. You can
                                            satisfied
                                            after usign this laptop. It’s performance is awesome.</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Samsome Note Book Pro 5 is an the best Laptop on this budgeted. You can
                                            satisfied
                                            after usign this laptop. It’s performance is awesome.</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Samsome Note Book Pro 5 is an the best Laptop on this budgeted. You can
                                            satisfied
                                            after usign this laptop. It’s performance is awesome.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">$295</td>
                                    <td class="pro-price">$275</td>
                                    <td class="pro-price">$395</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Red</td>
                                    <td class="pro-color">Blue</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">Stock Out</td>
                                    <td class="pro-stock">In Stock</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Add to cart</td>
                                    <td><a href="{{route('cart-page')}}" class="check-btn">Add to Cart</a></td>
                                    <td><a href="{{route('cart-page')}}" class="check-btn disabled">Add to Cart</a></td>
                                    <td><a href="{{route('cart-page')}}" class="check-btn">Add to Cart</a></td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rating</td>
                                    <td class="pro-ratting">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </td>
                                    <td class="pro-ratting">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </td>
                                    <td class="pro-ratting">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Remove</td>
                                    <td class="pro-remove">
                                        <button><i class="sli sli-trash"></i></button>
                                    </td>
                                    <td class="pro-remove">
                                        <button><i class="sli sli-trash"></i></button>
                                    </td>
                                    <td class="pro-remove">
                                        <button><i class="sli sli-trash"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Compare Page Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- compare main wrapper end -->

@endsection
