<header class="header-area header-style-1 header-height-2">

    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{route('frontend_home')}}"><img src="{{asset('ui/backend')}}/assets/img/sport.png" style="height: 80px" alt="logo"></a>
                </div>
                <div class="header-right">
                    <div class="search-style-1">
                        <form action="{{route('search')}}">                                
                            <input type="text" name="query" placeholder="Search for items...">
                        </form>
                    </div>

<div>
    

<ul class="d-flex align-items-center">


<div class="header-action-right">
                        <div class="header-action-2">
                        
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="">
                                    <img alt="Surfside Media" src="{{asset('ui/frontend')}}/assets/imgs/theme/icons/bell.png" style="position: relative;display: inline-block;">
                                    <span style="position: absolute;top: -5px;right: -5px;background-color: #f15412;color: white;width: 18px;height: 18px;border-radius: 50%;text-align: center;font-size: 12px;line-height: 18px;">4
                                    </span>
                                </a>
                              
                            </div>
                        </div>
                    </div>



                    <div class="header-action-right ms-3">
                        <div class="header-action-2">
                        
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{route('cart_items')}}">
                                    <img alt="Surfside Media" src="{{asset('ui/frontend')}}/assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count blue">

                                        @isset($myItems)
                                        {{ $myItems ?? 0 }}
                                      @endisset
                    
                                    </span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                   
                                    <div class="shopping-cart-footer">
                                       
                                        <div class="shopping-cart-button">
                                            <a href="{{route('cart_items')}}" class="outline">View cart</a>
                                            <a href="{{route('frontend_checkout')}}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


<li class="nav-item dropdown pe-3">

  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    
    <span class="d-none d-md-block dropdown-toggle ps-2">{{  auth()->user()->name }}</span>
  </a><!-- End Profile Iamge Icon -->

  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
  <li>
    <h5 class="ps-2">Web Developer</h5>
  </li> 
  <hr>
  <li>
    <a href="{{route('logout')}}"><h5 class="ps-2">Sign Out</h5></a>
     
   </li>

  </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->

</ul>

</div>

                    
                 
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{asset('ui/frontend')}}/assets/imgs/logo/logo.png" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                       
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blouses & Shirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Women's Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits & Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tanks & Camis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Coats & Jackets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Bottoms</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Pants & Capris</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bikini Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{asset('ui/frontend')}}/assets/imgs/banner/menu-banner-2.jpg" alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{asset('ui/frontend')}}/assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Jackets & Coats</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Suits & Blazers</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{asset('ui/frontend')}}/assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone Parts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Phone Bags & Cases</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Communication Equipments</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Walkie Talkie</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Accessories</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Car Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dust Plug</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Signal Boosters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{asset('ui/frontend')}}/{{asset('ui/frontend')}}/assets/imgs/banner/menu-banner-5.jpg" alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{asset('ui/frontend')}}/assets/imgs/banner/menu-banner-6.jpg" alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Jewelry & Accessories</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="shop.html"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                                <li>
                                    <ul class="more_slide_open" style="display: none;">
                                        <li><a href="shop.html"><i class="surfsidemedia-font-desktop"></i>Beauty, Health</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-cpu"></i>Bags and Shoes</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-diamond"></i>Consumer Electronics</a></li>
                                        <li><a href="shop.html"><i class="surfsidemedia-font-home"></i>Automobiles & Motorcycles</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a class="active" href="{{route('frontend_home')}}">Home </a></li>
                                <li><a href="{{route('frontend_about')}}">About</a></li>
                                
                                <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">      
                                            <ul>   
                                                @foreach ($categories as $category)
                                                <li><a href="{{route('frontend_shop',$category->id)}}">{{$category->category_name}}
                                                   
                                                </a></</li>
                                                @endforeach
                                              
                                             
                                            </ul>
                                        </li>




                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <!-- <a href="product-details.html"><img src="{{asset('ui/frontend')}}/assets/imgs/banner/pain belt.jpg" alt="Surfside Media"></a> -->
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
   
                                    </ul>
                              </li>
                                                               
                                <li><a href="{{route('frontend_contact')}}">Contact</a></li>
                                <li><a href="{{route('frontend_myAccount')}}">My Account</a>
                                    <!-- <ul class="sub-menu">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Products</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Orders</a></li>
                                
                                      
                                    </ul> -->
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> 
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+9) 5352-012-235 </p>
                </div>
           
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.php">
                                <img alt="Surfside Media" src="{{asset('ui/frontend')}}/assets/imgs/theme/icons/icon-heart.svg">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="cart.html">
                                <img alt="Surfside Media" src="{{asset('ui/frontend')}}/assets/imgs/theme/icons/icon-cart.svg">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media" src="{{asset('ui/frontend')}}/assets/imgs/shop/thumbnail-3.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media" src="{{asset('ui/frontend')}}/assets/imgs/shop/thumbnail-4.jpg"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="cart.html">View cart</a>
                                        <a href="shop-checkout.php">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>