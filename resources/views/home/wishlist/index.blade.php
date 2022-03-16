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
                            <li><a href="{{route('login-register')}}"> Login </a></li>
                            <li><a href="{{route('login-register')}}">Creat Account </a></li>
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
                    <li class="active">wishlist</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Your cart items-->
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <!-- table 'Your cart items'-->
                            <table>
                                <!-- List table 'Your cart items'-->
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Add To Cart</th>
                                </tr>
                                </thead>
                                <!-- //List table 'Your cart items'-->
                                <!-- item 'Your cart items'-->
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="home/img/cart/cart-1.png" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$260.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$110.00</td>
                                    <td class="product-wishlist-cart">
                                        <a href="#">add to cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="home/img/cart/cart-1.png" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$150.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$150.00</td>
                                    <td class="product-wishlist-cart">
                                        <a href="#">add to cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="home/img/cart/cart-1.png" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">Product Name</a></td>
                                    <td class="product-price-cart"><span class="amount">$170.00</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">$170.00</td>
                                    <td class="product-wishlist-cart">
                                        <a href="#">add to cart</a>
                                    </td>
                                </tr>
                                <!-- // item 'Your cart items'-->
                                </tbody>
                            </table>
                            <!-- //table 'Your cart items'-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //Your cart items-->

@endsection
