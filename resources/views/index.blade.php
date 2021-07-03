<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Diana – Furniture Store eCommerce Bootstrap5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Headroom CSS ==-->
    <link href="{{ asset('css/headroom.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Bardy Icon CSS ==-->
    <link href="{{ asset('css/bardy.icon.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('css/fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{ asset('css/slicknav.css') }}" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="{{ asset('css/aos.min.css') }}" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Top Notification Wrapper ==-->
  <div class="top-notification-bar">
    <div class="container">
      <div class="row">
        <div class="notification-entry text-center col-12">
          <p>All featured product 50% off <a href="#">Shop Now</a></p>
          <button class="notification-close-btn">X</button>
        </div>
      </div>
    </div>
  </div>
  <!--== End Top Notification Wrapper ==-->

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default sticky-header">
    <div class="container">
      <div class="row align-items-center justify-content-between position-relative">
        <div class="col">
          <div class="header-logo-area">
            <a href="index.blade.php">
              <img class="logo-main" src="{{ asset('img/logo.png') }}" alt="Logo" />
              <img class="logo d-none" src="{{ asset('img/logo-light.png') }}" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="col">
          <div class="header-navigation-area">
            <ul class="main-menu nav">
              <li class="has-submenu"><a href="#/"><span>Home</span></a>
                <ul class="submenu-nav">
                  <li><a href="index.blade.php">Home - 1</a></li>
                  <li><a href="index-two.blade.php">Home - 2</a></li>
                </ul>
              </li>
              <li class="has-submenu full-width"><a href="#/"><span>Shop</span></a>
                <ul class="submenu-nav submenu-nav-mega">
                  <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 01</a>
                    <ul>
                      <li><a href="shop-single-name-1.blade.php">New and sale badge product</a></li>
                      <li><a href="shop-single-name-1.blade.php">New badge product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Variable product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Soldout product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Simple product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Dummy product name</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 02</a>
                    <ul>
                      <li><a href="shop-single-name-1.blade.php">Variable with soldout product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Sample affiliate product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Countdown product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Without shortcode product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Demo product title</a></li>
                      <li><a href="shop-single-name-1.blade.php">Product dummy title</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 03</a>
                    <ul>
                      <li><a href="shop-single-name-1.blade.php">Dummy product name</a></li>
                      <li><a href="shop-single-name-1.blade.php">Dummy text for title</a></li>
                      <li><a href="shop-single-name-1.blade.php">Product title here</a></li>
                      <li><a href="shop-single-name-1.blade.php">Simple product</a></li>
                      <li><a href="shop-single-name-1.blade.php">Product with video</a></li>
                      <li><a href="shop-single-name-1.blade.php">Dummy text for title</a></li>
                    </ul>
                  </li>
                  <li class="mega-menu-item">
                    <ul>
                      <li><a href="#/"><img src="{{ asset('img/shop/banner/2.jpg') }}" alt="Image-HasTech"></a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#/"><span>Products</span></a>
                <ul class="submenu-nav">
                  <li><a href="shop-single-new.blade.php">New and sale badge product</a></li>
                  <li><a href="shop-single-badge.blade.php">New badge product</a></li>
                  <li><a href="shop-single.blade.php">Variable product</a></li>
                  <li><a href="shop-single-soldout.blade.php">Soldout product</a></li>
                  <li><a href="shop-single-simple.blade.php">Simple product</a></li>
                  <li><a href="shop-single-variable-soldout.blade.php">Variable with soldout product</a></li>
                  <li><a href="shop-single-affiliate.blade.php">Sample affiliate product</a></li>
                  <li><a href="shop-single-countdown.blade.php">Countdown product</a></li>
                  <li><a href="shop-single-shortcode.blade.php">Without shortcode product</a></li>
                  <li><a href="shop-single-video.blade.php">Product with video</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                <ul class="submenu-nav">
                  <li class="has-submenu"><a href="#">Shop</a>
                    <ul class="submenu-nav">
                      <li><a href="shop-3-grid.blade.php">Shop 3 Column</a></li>
                      <li><a href="shop-4-grid.blade.php">Shop 4 Column</a></li>
                      <li><a href="shop.blade.php">Shop Left Sidebar</a></li>
                      <li><a href="shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                      <li><a href="shop-list.blade.php">Shop Listing View</a></li>
                      <li><a href="shop-list-left-sidebar.blade.php">Shop List left Sidebar</a></li>
                      <li><a href="shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="shop-size-chart.blade.php">Size chart</a></li>
                  <li><a href="shop-shipping-policy.blade.php">Shipping policy</a></li>
                  <li><a href="about.blade.php">About</a></li>
                </ul>
              </li>
              <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                <ul class="submenu-nav">
                  <li><a href="blog.blade.php">Blog Left Sidebar</a></li>
                  <li><a href="blog-right-sidebar.blade.php">Blog Right Sidebar</a></li>
                  <li><a href="blog-grid.blade.php">Blog Grid Layout</a></li>
                  <li><a href="single-blog.blade.php">Single Blog Left Sidebar</a></li>
                  <li><a href="single-blog-right-sidebar.blade.php">Single Blog Right Sidebar</a></li>
                </ul>
              </li>
              <li><a href="contact.blade.php"><span>Contact</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="header-action-area">
            <ul class="header-action">
              <li class="currency-menu">
                <a class="title" href="javascript:;">USD</a>
                <ul class="currency-dropdown">
                  <li class="currency">
                    <ul>
                      <li class="active"><a href="#/">USD - US Dollar</a></li>
                      <li class="#/"><a href="#/">EUR - Euro</a></li>
                      <li class="#/"><a href="#/">GBP - British Pound</a></li>
                      <li class="#/"><a href="#/">INR - Indian Rupee</a></li>
                      <li class="#/"><a href="#/">USD - Bangladesh Taka</a></li>
                      <li class="#/"><a href="#/">JPY - Japan Yen</a></li>
                      <li class="#/"><a href="#/">CAD - Canada Dollar</a></li>
                      <li class="#/"><a href="#/">AUD - Australian Dollar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="header-action">
              <li class="user-menu">
                <a class="title" href="javascript:;"><i class="fa fa-user-o"></i></a>
                <ul class="user-dropdown">
                  <li class="user">
                    <ul>
                      <li><a href="#/">Login</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="header-action">
              <div class="header-search">
                <button class="search-toggle">
                  <i class="search-icon bardy bardy-search"></i>
                  <i class="close-icon bardy bardy-cancel"></i>
                </button>
                <div class="header-search-form">
                  <form action="#">
                    <input type="search" placeholder="Search our store">
                    <button type="submit"><i class="bardy bardy-search"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="header-action">
              <div class="header-mini-cart">
                <button class="mini-cart-toggle">
                  <i class="icon bardy bardy-shopping-cart"></i>
                  <span class="number">2</span>
                </button>
                <div class="mini-cart-dropdown">
                  <h4 class="cart-title">Your cart</h4>
                  <div class="cart-item-wrap">
                    <div class="cart-item">
                      <div class="thumb">
                        <a href="#/"><img class="w-100" src="{{ asset('img/shop/cart/mini1.jpg') }}" alt="Image-HasTech"></a>
                        <a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                      </div>
                      <div class="content">
                        <h5 class="title"><a href="#/">5. Simple product</a></h5>
                        <span>1 x Tk 50.00</span>
                      </div>
                    </div>
                    <div class="cart-item">
                      <div class="thumb">
                        <a href="#/"><img class="w-100" src="{{ asset('img/shop/cart/mini2.jpg') }}" alt="Image-HasTech"></a>
                        <a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                      </div>
                      <div class="content">
                        <h5 class="title"><a href="#/">2. New badge product - m / gold</a></h5>
                        <span>1 x Tk 80.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="mini-cart-footer">
                    <h4>Subtotal: <span class="total">Tk 130.00</span></h4>
                    <div class="cart-btn">
                      <a href="shop-cart.blade.php">View Cart</a>
                      <a href="shop-checkout.blade.php">Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="header-action d-block d-lg-none text-end">
              <button class="btn-menu" type="button"><i class="zmdi zmdi-menu"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->

  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container swiper-slide-gap home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="{{ asset('img/slider/slider-01.jpg') }}">
              <div class="container">
                <div class="row align-items-center ">
                  <div class="col-12">
                    <div class="slider-content">
                      <h5 class="sub-title">NEW COLLECTION 2021</h5>
                      <h2 class="title">New Interior Concept <br>Wooden Chairs</h2>
                      <a class="btn-slider" href="shop.blade.php">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="{{ asset('img/slider/slider-02.jpg') }}">
              <div class="container">
                <div class="row align-items-center ">
                  <div class="col-12">
                    <div class="slider-content">
                      <h5 class="sub-title">NEW COLLECTION 2021</h5>
                      <h2 class="title">The Brighten Up <br>Interior Collection</h2>
                      <a class="btn-slider" href="shop.blade.php">Shop Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--== Add Swiper Arrows ==-->
        <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            <div class="section-title">
              <h2 class="title">New Arrivals</h2>
              <div class="desc">
                <p>Some of our customers say that they trust us and buy our product without any hesitation because they believe us and always happy to buy our product.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/1.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">1. New and sale badge product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 110.00 </span>
                            <span class="price-old">Tk 130.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/2.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">2. New badge product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 80.00 </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/3.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">3. Variable product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 40.00 </span>
                            <span class="price-old">Tk 85.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/4.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">4. Soldout product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 19.00 </span>
                            <span class="price-old">Tk 29.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/5.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">5. Simple product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 50.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/6.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">6. Variable with soldout product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 55.00</span>
                            <span class="price-old">Tk 75.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/7.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">7. Sample affiliate product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 29.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/8.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                        <div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">8. Countdown product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 39.00 </span>
                            <span class="price-old">Tk 60.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/9.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">9. Without shortcode product</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 79.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Shop Item ==-->
                  <div class="product-item">
                    <div class="inner-content">
                      <div class="product-thumb">
                        <a href="shop-single.blade.php">
                          <img class="w-100" src="{{ asset('img/shop/10.jpg') }}" alt="Image-HasTech">
                        </a>
                        <div class="product-action">
                          <div class="addto-wrap">
                            <a class="add-cart" href="shop-cart.blade.php">
                              <span class="icon">
                                <i class="bardy bardy-shopping-cart"></i>
                                <i class="hover-icon bardy bardy-shopping-cart"></i>
                              </span>
                            </a>
                            <a class="add-wishlist" href="wishlist.html">
                              <span class="icon">
                                <i class="bardy bardy-wishlist"></i>
                                <i class="hover-icon bardy bardy-wishlist"></i>
                              </span>
                            </a>
                            <a class="add-quick-view" href="javascript:void(0);">
                              <span class="icon">
                                <i class="bardy bardy-quick-view"></i>
                                <i class="hover-icon bardy bardy-quick-view"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="product-desc">
                        <div class="product-info">
                          <h4 class="title"><a href="shop-single.blade.php">11. Product with video</a></h4>
                          <div class="star-content">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </div>
                          <div class="prices">
                            <span class="price">Tk 39.00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Shop Item ==-->
                </div>
              </div>

              <!--== Add Swiper navigation Buttons ==-->
              <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
              <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area">
      <div class="container-fluid p-0">
        <div class="row no-gutter about-position-style">
          <div class="col-lg-7">
            <div class="about-thumb">
              <div class="image-1" data-bg-img="{{ asset('img/about/1.jpg') }}"></div>
              <div class="image-2" data-bg-img="{{ asset('img/about/2.jpg') }}"></div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="about-content bg-theme-color3">
              <div class="section-title mb--0">
                <h2 class="sub-title">Provide the best</h2>
                <h2 class="title">Furniture For You</h2>
                <div class="desc">
                  <p>Modern furniture refers to furniture produced from the late 19th century through the present that is influenced by modernism. Post-World War II ideals of cutting excess, commodification, and practicality of materials in design heavily influenced the aesthetic of the furniture.</p>
                  <p>It was a tremendous departure from all furniture design that had gone before it. There was an opposition to the decorative arts, which included Art Nouveau, Neoclassical, and Victorian styles.</p>
                </div>
              </div>
              <a href="#" class="btn-theme">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-list-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            <div class="section-title">
              <h2 class="title">Product List</h2>
              <div class="desc">
                <p>Some of our customers say that they trust us and buy our product without any hesitation because they believe us and always happy to buy our product.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-category-tab-wrap">
              <ul class="nav nav-tabs product-category-nav" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="true">Featured</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="chair-tab" data-bs-toggle="tab" data-bs-target="#chair" type="button" role="tab" aria-controls="chair" aria-selected="false">Chair</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="sofa-tab" data-bs-toggle="tab" data-bs-target="#sofa" type="button" role="tab" aria-controls="sofa" aria-selected="false">Sofa</button>
                </li>
              </ul>
              <div class="tab-content product-category-content" id="myTabContent">
                <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                  <div class="row">
                    <div class="col-12">
                      <div class="swiper-container swiper-nav swiper-slide-gap product-slider-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/1.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">1. New and sale badge product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 110.00 </span>
                                      <span class="price-old">Tk 130.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->

                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/2.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">2. New badge product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 80.00 </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->
                          </div>
                          <div class="swiper-slide">
                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/3.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">3. Variable product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 40.00 </span>
                                      <span class="price-old">Tk 85.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->

                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/4.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">4. Soldout product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 19.00 </span>
                                      <span class="price-old">Tk 29.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->
                          </div>
                          <div class="swiper-slide">
                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/5.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">5. Simple product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 50.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->

                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/6.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">6. Variable with soldout product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 55.00</span>
                                      <span class="price-old">Tk 75.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->
                          </div>
                          <div class="swiper-slide">
                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/7.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">7. Sample affiliate product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 29.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->

                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/8.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">8. Countdown product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 39.00 </span>
                                      <span class="price-old">Tk 60.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->
                          </div>
                          <div class="swiper-slide">
                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/9.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">9. Without shortcode product</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 79.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->

                            <!--== Start Shop Item ==-->
                            <div class="product-item">
                              <div class="inner-content">
                                <div class="product-thumb">
                                  <a href="shop-single.blade.php">
                                    <img class="w-100" src="{{ asset('img/shop/10.jpg') }}" alt="Image-HasTech">
                                  </a>
                                  <div class="product-action">
                                    <div class="addto-wrap">
                                      <a class="add-cart" href="shop-cart.blade.php">
                                        <span class="icon">
                                          <i class="bardy bardy-shopping-cart"></i>
                                          <i class="hover-icon bardy bardy-shopping-cart"></i>
                                        </span>
                                      </a>
                                      <a class="add-wishlist" href="wishlist.html">
                                        <span class="icon">
                                          <i class="bardy bardy-wishlist"></i>
                                          <i class="hover-icon bardy bardy-wishlist"></i>
                                        </span>
                                      </a>
                                      <a class="add-quick-view" href="javascript:void(0);">
                                        <span class="icon">
                                          <i class="bardy bardy-quick-view"></i>
                                          <i class="hover-icon bardy bardy-quick-view"></i>
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-desc">
                                  <div class="product-info">
                                    <h4 class="title"><a href="shop-single.blade.php">11. Product with video</a></h4>
                                    <div class="star-content">
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                      <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="prices">
                                      <span class="price">Tk 39.00</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--== End Shop Item ==-->
                          </div>
                        </div>

                        <!--== Add Swiper navigation Buttons ==-->
                        <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                        <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="chair" role="tabpanel" aria-labelledby="chair-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/1.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">1. New and sale badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 110.00 </span>
                                <span class="price-old">Tk 130.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/2.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">2. New badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 80.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/3.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">3. Variable product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 40.00 </span>
                                <span class="price-old">Tk 85.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/4.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">4. Soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00 </span>
                                <span class="price-old">Tk 29.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/5.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">5. Simple product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 50.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/6.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">6. Variable with soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 55.00</span>
                                <span class="price-old">Tk 75.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-xl-block">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/7.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">7. Sample affiliate product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 29.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/8.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">8. Countdown product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 39.00 </span>
                                <span class="price-old">Tk 60.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="sofa" role="tabpanel" aria-labelledby="sofa-tab">
                  <div class="row">
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/1.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">1. New and sale badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 110.00 </span>
                                <span class="price-old">Tk 130.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/2.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">2. New badge product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 80.00 </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/3.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">3. Variable product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 40.00 </span>
                                <span class="price-old">Tk 85.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/4.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">4. Soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 19.00 </span>
                                <span class="price-old">Tk 29.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-lg-block">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/5.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">5. Simple product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 50.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/6.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">6. Variable with soldout product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 55.00</span>
                                <span class="price-old">Tk 75.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 d-none d-xl-block">
                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/7.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">7. Sample affiliate product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 29.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->

                      <!--== Start Shop Item ==-->
                      <div class="product-item">
                        <div class="inner-content">
                          <div class="product-thumb">
                            <a href="shop-single.blade.php">
                              <img class="w-100" src="{{ asset('img/shop/8.jpg') }}" alt="Image-HasTech">
                            </a>
                            <div class="product-action">
                              <div class="addto-wrap">
                                <a class="add-cart" href="shop-cart.blade.php">
                                  <span class="icon">
                                    <i class="bardy bardy-shopping-cart"></i>
                                    <i class="hover-icon bardy bardy-shopping-cart"></i>
                                  </span>
                                </a>
                                <a class="add-wishlist" href="wishlist.html">
                                  <span class="icon">
                                    <i class="bardy bardy-wishlist"></i>
                                    <i class="hover-icon bardy bardy-wishlist"></i>
                                  </span>
                                </a>
                                <a class="add-quick-view" href="javascript:void(0);">
                                  <span class="icon">
                                    <i class="bardy bardy-quick-view"></i>
                                    <i class="hover-icon bardy bardy-quick-view"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                            <div class="ht-countdown ht-countdown-style" data-date="4/24/2022"></div>
                          </div>
                          <div class="product-desc">
                            <div class="product-info">
                              <h4 class="title"><a href="shop-single.blade.php">8. Countdown product</a></h4>
                              <div class="star-content">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                              </div>
                              <div class="prices">
                                <span class="price">Tk 39.00 </span>
                                <span class="price-old">Tk 60.00</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--== End Shop Item ==-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="divider-area divider-offer-area bg-color-222">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="divider-style-wrap text-center">
              <div class="divider-content">
                <h4 class="sub-title">Special <span>Offers</span> for Subscription</h4>
                <h4 class="title">GET INSTANT DISCOUNT FOR MEMBERSHIP</h4>
                <p>Subscribe our newsletter and get all latest news abot our latest <br>products, promotions, offers and discount</p>
                <div class="newsletter-content-wrap">
                  <div class="newsletter-form">
                    <form action="#">
                      <input type="email" class="form-control" placeholder="Enter your email here">
                      <button class="btn-submit" type="button">Subscribe</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title">
              <h2 class="title">Latest Blog</h2>
              <div class="desc">
                <p>Some of our customers say that they trust us and buy our product without any hesitation because they believe us and always happy to buy our product.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="swiper-container swiper-nav swiper-slide-gap post-slider-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/1.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Standard dummy text ever since</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/2.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Make a type specimen book</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/3.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Lorem Ipsum is simply dummy</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/4.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">It is a long established</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/5.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Sed quia non numquam</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
                <div class="swiper-slide">
                  <!--== Start Blog Item ==-->
                  <div class="post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="single-blog.blade.php">
                          <img class="w-100" src="{{ asset('img/blog/6.jpg') }}" alt="Image-HasTech">
                        </a>
                      </div>
                      <div class="content">
                        <h4 class="title"><a href="single-blog.blade.php">Ratione voluptatem sequi nesciunt</a></h4>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,...</p>
                        <a class="btn-link" href="single-blog.blade.php">Read More</a>
                        <ul class="meta-info">
                          <li><span>By - </span><a class="author" href="blog.blade.php">Diana Demo Admin</a></li>
                          <li><span>01 February, 2021</span></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
              </div>

              <!--== Add Swiper navigation Buttons ==-->
              <div class="swiper-button swiper-button-prev"><i class="fa fa-angle-left"></i></div>
              <div class="swiper-button swiper-button-next"><i class="fa fa-angle-right"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <section class="feature-area">
      <div class="feature-container">
        <div class="row no-gutter">
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{ asset('img/icons/1.jpg') }}"></div>
                <div class="content">
                  <h3 class="title">Free home delivery</h3>
                  <p>Provide free home delivery for all product over $100</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{ asset('img/icons/1.jpg') }}"></div>
                <div class="content">
                  <h3 class="title">Quality Products</h3>
                  <p>We ensure the product quality that is our main goal</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{ asset('img/icons/1.jpg') }}"></div>
                <div class="content">
                  <h3 class="title">3 Days Return</h3>
                  <p>Return product within 3 days for any product you buy</p>
                </div>
              </div>
            </div>
          </div>
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{ asset('img/icons/1.jpg') }}"></div>
                <div class="content">
                  <h3 class="title">Online Support</h3>
                  <p>We ensure the product quality that you can trust easily</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Feature Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area bg-color-222">
    <div class="footer-top-area">
      <div class="container">
        <div class="footer-widget-wrap row">
          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <div class="footer-logo-area">
                <a href="index.blade.php">
                  <img class="logo-main" src="{{ asset('img/logo-light.png') }}" alt="Logo" />
                </a>
              </div>
              <p>People have been using natural objects, such as tree stumps, rocks and moss, as furniture since the beginning of human civilisation.</p>
              <p>Your current address goes to here,120 example, country.</p>
              <p>+12546 687 987  / +15425 987 541</p>
              <p>demo@example.com www.example.com</p>
            </div>
            <!--== End widget Item ==-->
          </div>

          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Quick Link</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="page-search.blade.php">Search</a></li>
                  <li><a href="about.blade.php">About</a></li>
                  <li><a href="contact.blade.php">Contact</a></li>
                  <li><a href="shipping-policy.html">Shipping policy</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                  <li><a href="shop.blade.php">All Products</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>

          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Information</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="login.html">Login</a></li>
                  <li><a href="#/">My Account</a></li>
                  <li><a href="#/">Terms & Conditions</a></li>
                  <li><a href="shop-shipping-policy.blade.php">Shipping policy</a></li>
                  <li><a href="shop-checkout.blade.php">Payment System</a></li>
                  <li><a href="#/">Promotional Offers</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>

          <div class="col">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <h4 class="widget-title">Follow us</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="#/">Facebook</a></li>
                  <li><a href="#/">Twitter</a></li>
                  <li><a href="#/">Instagram</a></li>
                  <li><a href="#/">LinkedIn</a></li>
                  <li><a href="#/">Google Plus</a></li>
                  <li><a href="#/">YouTube</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
        </div>
      </div>
    </div>
    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <p class="copyright">Copyright © <a target="_blank" href="https://hasthemes.com/">Diana</a> All Right Reserved.</p>
          </div>
          <div class="col-lg-6">
            <div class="payment-method">
              <img src="{{ asset('img/icons/payment.webp') }}" alt="Image-HasTech">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Quick View Menu ==-->
  <aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="{{ asset('img/shop/quick-view1.jpg') }}" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">3. Variable product</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$70.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity2" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>
  <!--== End Quick View Menu ==-->

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->
</div>

<!--=======================Javascript============================-->

<!--=== jQuery Modernizr Min Js ===-->
<script src="{{ asset('js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{ asset('js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{ asset('js/jquery-migrate.js')}}"></script>
<!--=== jQuery Popper Min Js ===-->
<script src="{{ asset('js/popper.min.js')}}"></script>
<!--=== jQuery Bootstrap Min Js ===-->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!--=== jQuery Appear Js ===-->
<script src="{{ asset('js/jquery.appear.js')}}"></script>
<!--=== jQuery Headroom Min Js ===-->
<script src="{{ asset('js/headroom.min.js')}}"></script>
<!--=== jQuery Swiper Min Js ===-->
<script src="{{ asset('js/swiper.min.js')}}"></script>
<!--=== jQuery Fancybox Min Js ===-->
<script src="{{ asset('js/fancybox.min.js')}}"></script>
<!--=== jQuery Slick Nav Js ===-->
<script src="{{ asset('js/slicknav.js')}}"></script>
<!--=== jQuery Waypoint Js ===-->
<script src="{{ asset('js/waypoint.js')}}"></script>
<!--=== jQuery Parallax Min Js ===-->
<script src="{{ asset('js/parallax.min.js')}}"></script>
<!--=== jQuery Aos Min Js ===-->
<script src="{{ asset('js/aos.min.js')}}"></script>
<!--=== jQuery Countdown Js ===-->
<script src="{{ asset('js/countdown.js')}}"></script>

<!--=== jQuery Custom Js ===-->
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
