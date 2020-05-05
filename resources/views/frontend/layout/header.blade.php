<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-12">
                <div class="logo">
                    <a href="{{url('index')}}">
                        <img src="source/img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-7 text-center col-12">
                <div class="responsive_menu"></div>
                <div class="mainmenu">
                    <ul id="nav">
                        <li><a href="{{url('index')}}">Home</a>
                        </li>
                        <li><a href="{{url('product_page')}}">Product</a>
                        </li>
                        <li class="pages-cta"><a href="#">Page</a>
                            <ul class="drop-menu mega-menu">
                                <!-- mega menu area start-->
                                <li class="mega-menu-content">
                                    <ul class="left-drop-menu">
                                        <!--single mega menu area start-->
                                        <li class="big-content">Others Pages</li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="account.html">Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="forget.html">Forget Password</a></li>
                                        <li><a href="cart.html">Cart Now</a></li>
                                        <li><a href="order.html">Order Page</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="404.html">404 Not Found</a></li>
                                    </ul>
                                    <ul class="mega-menu-img">
                                        <!--single mega menu area start-->
                                        <li class="drop-img">
                                            <a href="single-shop.html">
                                                <img src="source/img/product-carousell-img-1.jpeg" alt="">
                                                <span class="title-mg">
                                                    <span class="cta-mg1">Best Prize</span>
                                                    <br>
                                                    <span class="mg-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-img">
                                        <!--single mega menu area start-->
                                        <li class="drop-img">
                                            <a href="single-shop.html">
                                                <img src="source/img/product-carousell-img-2.jpeg" alt="">
                                                <span class="title-mg">
                                                    <span class="cta-mg1">30% Off</span>
                                                    <br>
                                                    <span class="mg-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="mega-menu-img">
                                        <!--single mega menu area start-->
                                        <li class="drop-img">
                                            <a href="single-shop.html">
                                                <img src="source/img/product-img-4.jpeg" alt="">
                                                <span class="title-mg">
                                                    <span class="cta-mg1">Top Sale</span>
                                                    <br>
                                                    <span class="mg-rating">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- mega menu area end-->
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="#">About</a>
                            <ul class="submenu">
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="header-right">
                    @if (Auth::check())
                    <a href={{ url('logout', []) }}><span>Logout</span></a>
                    @else
                    <a href={{ url('account', []) }}><span>Login</span></a>
                    @endif
                    <span class="search-bar">
                        <span class="search"><i class="fa fa-search"></i></span>
                        <input type="search" id="autocomplete" placeholder="Search">
                    </span>
                    <span class="heart"><i class="fa fa-heart"></i></span>
                    <a href="{{url('cart')}}"><span class="shopping-bag"><i class="fa fa-shopping-bag"></i></span></a>
                    <a href="{{url('cart')}}"><span class="cart">{{Cart::getTotalQuantity()}}</span></a>
                </div>
            </div>
        </div>
    </div>
</div>