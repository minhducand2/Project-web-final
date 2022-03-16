@extends('home.layout.master')

@section('Content')

    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="sli sli-close"></i></a>
        <div class="header-mobile-aside-wrap">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <label>
                        <input type="text" placeholder="Search entire store…">
                    </label>
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
                    <!-- language -->
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Vietnam (VN)</a></li>
                        </ul>
                    </div>
                    <!-- //language -->
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
                    <li class="active">blog details</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="blog-details-wrapper ml-20">
                        <div class="blog-details-top">
                            <div class="blog-details-img">
                                <img alt="" src="home/img/blog/blog-details-1.png">
                            </div>
                            <div class="blog-details-content">
                                <h3>14 Emerging Fashion Influencers Who Are Going to Own 2018</h3>
                                <div class="blog-details-meta">
                                    <ul>
                                        <li>23 December 2019</li>
                                        <li> 24 View</li>
                                        <li>4 likes</li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididugnt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sin occaecat cupidatat non sunt proident, in culpa qei officia
                                    deser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
                                    sit volupta accusantium doloremque laudantium, totam rem aperiam. </p>
                                <blockquote>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor
                                    incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur.</p>
                            </div>
                        </div>
                        <div class="dec-img-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="dec-img mb-50">
                                        <img alt="" src="home/img/blog/blog-details-2.png">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="dec-img mb-50">
                                        <img alt="" src="home/img/blog/blog-details-3.png">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.</p>
                        </div>
                        <div class="tag-share">
                            <div class="dec-tag">
                                <ul>
                                    <li><a href="#">lifestyle ,</a></li>
                                    <li><a href="#">interior ,</a></li>
                                    <li><a href="#">outdoor</a></li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>share :</span>
                                <div class="share-social">
                                    <ul>
                                        <li>
                                            <a class="facebook" href="#">
                                                <i class="sli sli-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#">
                                                <i class="sli sli-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="instagram" href="#">
                                                <i class="sli sli-social-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="next-previous-post">
                            <a href="#"> <i class="sli sli-arrow-left"></i> prev post</a>
                            <a href="#">next post <i class="sli sli-arrow-right"></i></a>
                        </div>

                        <div class="blog-comment-wrapper mt-55">
                            <h4 class="blog-dec-title">comments : 02</h4>
                            <div class="single-comment-wrapper mt-35">
                                <div class="blog-comment-img">
                                    <img src="home/img/blog/comment-1.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>Anthony Stephens</h4>
                                    <span>October 14, 2018 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-details-btn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrapper ml-120 mt-50">
                                <div class="blog-comment-img">
                                    <img src="home/img/blog/comment-1.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>DX Joxova</h4>
                                    <span>October 14, 2018 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-details-btn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment-wrapper mt-50">
                                <div class="blog-comment-img">
                                    <img src="home/img/blog/comment-1.jpg" alt="">
                                </div>
                                <div class="blog-comment-content">
                                    <h4>Anthony Stephens</h4>
                                    <span>October 14, 2018 </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                    <div class="blog-details-btn">
                                        <a href="#">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- post a comment -->
                        <div class="blog-reply-wrapper mt-50">
                            <h4 class="blog-dec-title">post a comment</h4>
                            <form class="blog-form" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="text" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="email" placeholder="Email Address ">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave">
                                            <textarea placeholder="Message"></textarea>
                                            <input type="submit" value="SEND MESSAGE">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- //post a comment-->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-style">
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
                            <h4 class="pro-sidebar-title">Categories </h4>
                            <div class="sidebar-widget-list mt-20">
                                <ul>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Women <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Men <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Bags <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar-widget-list-left">
                                            <input type="checkbox" value=""> <a href="#">Market <span>4</span> </a>
                                            <span class="checkmark"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-40">
                            <h4 class="pro-sidebar-title">Recent Post </h4>
                            <div class="sidebar-project-wrap mt-30">
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="home/img/blog/sidebar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Photography</span>
                                        <h4><a href="#">Demo Product Name</a></h4>
                                    </div>
                                </div>
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="home/img/blog/sidebar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Branding</span>
                                        <h4><a href="#">Demo Product Name</a></h4>
                                    </div>
                                </div>
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="home/img/blog/sidebar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Design</span>
                                        <h4><a href="#">Demo Product Name</a></h4>
                                    </div>
                                </div>
                                <div class="single-sidebar-blog">
                                    <div class="sidebar-blog-img">
                                        <a href="#"><img src="home/img/blog/sidebar-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-blog-content">
                                        <span>Photography</span>
                                        <h4><a href="#">Demo Product Name</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-30">
                            <h4 class="pro-sidebar-title">Archive </h4>
                            <div class="sidebar-widget-archive mt-20">
                                <ul>
                                    <li>
                                        <a href="#">June 2018</a>
                                    </li>
                                    <li>
                                        <a href="#">May 2018</a>
                                    </li>
                                    <li>
                                        <a href="#">April 2018</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mt-50">
                            <h4 class="pro-sidebar-title">Tag </h4>
                            <div class="sidebar-widget-tag mt-25">
                                <ul>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="{{route('market')}}">Market</a></li>
                                    <li><a href="#">For Men</a></li>
                                    <li><a href="#">Women</a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
