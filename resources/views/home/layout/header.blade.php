<header class="header-area sticky-bar">
    <div class="main-header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo pt-40">
                        <a href="/">
                            <img src="home/img/logo/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 ">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="angle-shape"><a href="/">Home </a></li>
                                <li class="angle-shape"><a href="{{route('shop')}}"> Shop <span>new</span> </a>
                                    <ul class="mega-menu">
                                        <li><a class="menu-title" href="">Laptop</a>
                                            <ul>
                                                <li><a href="{{route('asus')}}">ASUS</a></li>
                                                <li><a href="{{route('msi')}}">MSI</a></li>
                                                <li><a href="{{route('dell')}}">DELL</a></li>
                                                <li><a href="{{route('lenovol')}}">Lenovo</a></li>
                                                <li><a href="{{route('macbook')}}">MacBook</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menu-title" href="">Mobile Phone</a>
                                            <ul>
                                                <li><a href="{{route('samsum')}}">SAMSUNG</a></li>
                                                <li><a href="{{route('iphone')}}">Iphone</a></li>
                                                <li><a href="{{route('oppo')}}">Oppo</a></li>
                                                <li><a href="{{route('vivo')}}">ViVo</a></li>
                                                <li><a href="{{route('nokia')}}">Nokia </a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menu-title" href="{{route('shop')}}">Accessory</a>
                                            <ul>
                                                <li><a href="{{route('phone-accessories')}}">Phone accessories</a></li>
                                                <li><a href="{{route('laptop-accessories')}}">Laptop accessories</a></li>
                                                <li><a href="{{route('audio-equipments')}}">Audio equipments</a></li>
                                                <li><a href="{{route('smart-home-device')}}">Smart home device</a></li>
                                                <li><a href="{{route('archive-device')}}">Archive device</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="menu-title" href="">Fashion shopping</a>
                                            <ul>
                                                <li><a href="{{route('t-shirt')}}">T-shirt</a></li>
                                                <li><a href="{{route('trousers')}}">Trousers</a></li>
                                                <li><a href="{{route('hand-bag')}}">Hand Bag</a></li>
                                                <li><a href="{{route('fashion-accessories')}}">Fashion Accessories</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('market')}}">Market <span>hot</span> </a></li>
                                <li><a href="{{route('contact')}}"> Contact </a></li>
                                <li class="angle-shape"><a href="#">Pages </a>
                                    <ul class="submenu">
                                        <li><a href="{{route('cart-page')}}">cart page </a></li>
                                        <li><a href="{{route('checkout')}}">checkout </a></li>
                                        <li><a href="{{route('compare-page')}}">compare </a></li>
                                        <li><a href="{{route('wishlist')}}">wishlist </a></li>
                                        <li><a href="{{route('my-account')}}">my account </a></li>
                                        <li><a href="{{route('contact')}}">contact us </a></li>
                                        <li><a href="{{route('login-register')}}">login/register </a></li>
                                    </ul>
                                </li>
                                <li class="angle-shape"><a href="{{route('blog')}}"> Blog </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="header-right-wrap pt-40">
                        <div class="header-search">
                            <a class="search-active" href="#"><i class="sli sli-magnifier"></i></a>
                        </div>
                        <div class="cart-wrap">
                            <button class="icon-cart-active">
                                    <span class="icon-cart">
                                        <i class="sli sli-bag"></i>
                                        <span class="count-style">02</span>
                                    </span>
                                <span class="cart-price">
                                        $320.00
                                    </span>
                            </button>
                            <div class="shopping-cart-content">
                                <div class="shopping-cart-top">
                                    <h4>Shoping Cart</h4>
                                    <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                </div>
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="home/img/cart/cart-1.png"></a>
                                            <div class="item-close">
                                                <a href="#"><i class="sli sli-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Product Name </a></h4>
                                            <span>1 x 90.00</span>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="home/img/cart/cart-1.png"></a>
                                            <div class="item-close">
                                                <a href="#"><i class="sli sli-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Product Name</a></h4>
                                            <span>1 x 90.00</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-bottom">
                                    <div class="shopping-cart-total">
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn btn-hover text-center">
                                        <a class="default-btn" href="{{route('checkout')}}">checkout</a>
                                        <a class="default-btn" href="{{route('cart-page')}}">view cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setting-wrap">
                            <button class="setting-active">
                                <i class="sli sli-settings"></i>
                            </button>
                            <div class="setting-content">
                                <ul>
                                    <!-- Money -->
                                    <li>
                                        <h4>Currency</h4>
                                        <ul>
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">VND</a></li>
                                        </ul>
                                    </li>
                                    <!--//Money -->
                                    <!-- Language -->
                                    <li>
                                        <h4>Language</h4>
                                        <ul>
                                            <li><a href="#">English (UK)</a></li>
                                            <li><a href="#">Vietnam (VN)</a></li>
                                        </ul>
                                    </li>
                                    <!-- //Language -->
                                    <li>
                                        <h4>Account</h4>
                                        <ul>
                                            <li><a href="{{route('login-register')}}">Login</a></li>
                                            <li><a href="{{route('login-register')}}">Creat Account</a></li>
                                            <li><a href="{{route('my-account')}}">My Account</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><span class="sli sli-close"></span></button>
            </div>
            <div class="sidebar-search-input">
                <form>
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="Search Now" type="search">
                        <button>
                            <i class="sli sli-magnifier"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="header-small-mobile">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a href="/">
                            <img alt="" src="home/img/logo/logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap">
                        <div class="cart-wrap">
                            <button class="icon-cart-active">
                                    <span class="icon-cart">
                                        <i class="sli sli-bag"></i>
                                        <span class="count-style">02</span>
                                    </span>
                                <span class="cart-price">
                                        $320.00
                                    </span>
                            </button>
                            <div class="shopping-cart-content">
                                <div class="shopping-cart-top">
                                    <h4>Shoping Cart</h4>
                                    <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                </div>
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="home/img/cart/cart-1.png"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Product Name </a></h4>
                                            <span>1 x 90.00</span>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="home/img/cart/cart-1.png"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Product Name</a></h4>
                                            <span>1 x 90.00</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-bottom">
                                    <div class="shopping-cart-total">
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn btn-hover text-center">
                                        <a class="default-btn" href="{{route('checkout')}}">checkout</a>
                                        <a class="default-btn" href="{{route('cart-page')}}">view cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class="sli sli-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
