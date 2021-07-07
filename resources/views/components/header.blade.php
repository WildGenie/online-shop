<!--== Start Header Wrapper ==-->
<header class="header-area header-default sticky-header">
    <div class="container">
        <div class="row align-items-center justify-content-between position-relative">
            <div class="col">
                <div class="header-logo-area">
                    <a href="{{ route('home') }}">
                        <img class="logo-main" src="{{ asset('img/logo.png') }}" alt="Logo" />
                        <img class="logo d-none" src="{{ asset('img/logo-light.png') }}" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="header-navigation-area">
                    <ul class="main-menu nav">
                        <li class="has-submenu"><a href="{{ route('home') }}"><span>Home</span></a>
                            <ul class="submenu-nav">
                                <li><a href="{{ route('home') }}">Home - 1</a></li>
                                <li><a href="{{ route('home2') }}">Home - 2</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu full-width"><a href="/products"><span>Shop</span></a>
                            <ul class="submenu-nav submenu-nav-mega">
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 01</a>
                                    <ul>
                                        <li><a href="../shop-single-name-1.blade.php">New and sale badge product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">New badge product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Variable product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Soldout product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Simple product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Dummy product name</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 02</a>
                                    <ul>
                                        <li><a href="../shop-single-name-1.blade.php">Variable with soldout product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Sample affiliate product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Countdown product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Without shortcode product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Demo product title</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Product dummy title</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item"><a href="#/" class="mega-title">Collection 03</a>
                                    <ul>
                                        <li><a href="../shop-single-name-1.blade.php">Dummy product name</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Dummy text for title</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Product title here</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Simple product</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Product with video</a></li>
                                        <li><a href="../shop-single-name-1.blade.php">Dummy text for title</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-item">
                                    <ul>
                                        <li><a href="#/"><img src="{{ asset('img/shop/banner/2.jpg') }}" alt="Image-HasTech"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="/products"><span>Products</span></a>
                            <ul class="submenu-nav">
                                <li><a href="/shop">New and sale badge product</a></li>
                                <li><a href="../shop-single-badge.blade.php">New badge product</a></li>
                                <li><a href="../shop-single.blade.php">Variable product</a></li>
                                <li><a href="../shop-single-soldout.blade.php">Soldout product</a></li>
                                <li><a href="../shop-single-simple.blade.php">Simple product</a></li>
                                <li><a href="../shop-single-variable-soldout.blade.php">Variable with soldout product</a></li>
                                <li><a href="../shop-single-affiliate.blade.php">Sample affiliate product</a></li>
                                <li><a href="../shop-single-countdown.blade.php">Countdown product</a></li>
                                <li><a href="../shop-single-shortcode.blade.php">Without shortcode product</a></li>
                                <li><a href="../shop-single-video.blade.php">Product with video</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                            <ul class="submenu-nav">
                                <li class="has-submenu"><a href="#">Shop</a>
                                    <ul class="submenu-nav">
                                        <li><a href="../shop-3-grid.blade.php">Shop 3 Column</a></li>
                                        <li><a href="../shop-4-grid.blade.php">Shop 4 Column</a></li>
                                        <li><a href="../shop.blade.php">Shop Left Sidebar</a></li>
                                        <li><a href="../shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                                        <li><a href="../shop-list.blade.php">Shop Listing View</a></li>
                                        <li><a href="../shop-list-left-sidebar.blade.php">Shop List left Sidebar</a></li>
                                        <li><a href="../shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="../shop-size-chart.blade.php">Size chart</a></li>
                                <li><a href="../shop-shipping-policy.blade.php">Shipping policy</a></li>
                                <li><a href="../about.blade.php">About</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                            <ul class="submenu-nav">
                                <li><a href="../blog.blade.php">Blog Left Sidebar</a></li>
                                <li><a href="../blog-right-sidebar.blade.php">Blog Right Sidebar</a></li>
                                <li><a href="../blog-grid.blade.php">Blog Grid Layout</a></li>
                                <li><a href="../single-blog.blade.php">Single Blog Left Sidebar</a></li>
                                <li><a href="../single-blog-right-sidebar.blade.php">Single Blog Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact"><span>Contact</span></a></li>
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
                                    <ul>
                                        <li><a href="#/">Register</a></li>
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
                                <form action="/products?search{{ request('search') }}" method="GET">
                                    <input type="search" name="search" placeholder="Search our store">
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
                                        <a href="../shop-cart.blade.php">View Cart</a>
                                        <a href="../shop-checkout.blade.php">Checkout</a>
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
