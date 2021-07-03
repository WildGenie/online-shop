<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Shipping policy – Diana – Furniture Store eCommerce Bootstrap5 Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,400i,600,700" rel="stylesheet">

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

  <!--== Start Header Wrapper ==-->
  <header class="header-area header-default">
    <div class="container">
      <div class="row align-items-center justify-content-between position-relative">
        <div class="col">
          <div class="header-logo-area">
            <a href="index.blade.php">
              <img class="logo-main" src="{{asset('img/logo.png')}}" alt="Logo" />
              <img class="logo d-none" src="{{asset('img/logo-light.png')}}" alt="Logo" />
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
                      <li><a href="#/"><img src="{{asset('img/shop/banner/2.jpg')}}" alt="Image-HasTech"></a></li>
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
                        <a href="#/"><img class="w-100" src="{{asset('img/shop/cart/mini1.jpg')}}" alt="Image-HasTech"></a>
                        <a class="remove" href="javascript:void(0);"><i class="fa fa-trash-o"></i></a>
                      </div>
                      <div class="content">
                        <h5 class="title"><a href="#/">5. Simple product</a></h5>
                        <span>1 x Tk 50.00</span>
                      </div>
                    </div>
                    <div class="cart-item">
                      <div class="thumb">
                        <a href="#/"><img class="w-100" src="{{asset('img/shop/cart/mini2.jpg')}}" alt="Image-HasTech"></a>
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
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">Size chart</h4>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1000">
                <ul class="breadcrumb">
                  <li><a href="index.blade.php">Home</a></li>
                  <li class="breadcrumb-sep">-</li>
                  <li>Size chart</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start shipping Policy Area Wrapper ==-->
    <section class="product-size-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-8 m-auto">
            <div class="product-size-chart">
              <h4>Size Chart</h4>
              <table class="table">
                <tbody>
                  <tr>
                    <td class="cun-name"><span>UK</span></td>
                    <td>18</td>
                    <td>20</td>
                    <td>22</td>
                    <td>24</td>
                    <td>26</td>
                  </tr>
                  <tr>
                    <td class="cun-name"><span>European</span></td>
                    <td>46</td>
                    <td>48</td>
                    <td>50</td>
                    <td>52</td>
                    <td>54</td>
                  </tr>
                  <tr>
                    <td class="cun-name"><span>usa</span></td>
                    <td>14</td>
                    <td>16</td>
                    <td>18</td>
                    <td>20</td>
                    <td>22</td>
                  </tr>
                  <tr>
                    <td class="cun-name"><span>Australia</span></td>
                    <td>28</td>
                    <td>10</td>
                    <td>12</td>
                    <td>14</td>
                    <td>16</td>
                  </tr>
                  <tr>
                    <td class="cun-name"><span>Canada</span></td>
                    <td>24</td>
                    <td>18</td>
                    <td>14</td>
                    <td>42</td>
                    <td>36</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End shipping Policy Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <section class="feature-area">
      <div class="feature-container">
        <div class="row no-gutter">
          <div class="feature-col col-xl-3 col-md-6 col-12">
            <div class="feature-icon-box">
              <div class="inner-content">
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
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
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
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
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
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
                <div class="icon-box" data-bg-img="{{asset('img/icons/1.jpg')}}"></div>
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
                  <img class="logo-main" src="{{asset('img/logo-light.png')}}" alt="Logo" />
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
                  <li><a href="shop-shipping-policy.blade.php">Shipping Policy</a></li>
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
              <img src="{{asset('img/icons/payment.webp')}}" alt="Image-HasTech">
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
              <img src="{{asset('img/shop/quick-view1.jpg')}}" alt="Alan-Shop">
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
