@props(['categories'])

<!--== Start Header Wrapper ==-->
<header class="header-area header-default sticky-header">
    <div class="container">
        <div class="row align-items-center justify-content-between position-relative">
            <div class="col">
                <div class="header-logo-area">
                    <a href="{{ route('home') }}">
                        <img class="logo-main" src="{{ asset('img/logo.svg') }}" alt="Logo" />
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="header-navigation-area">
                    <ul class="main-menu nav">
                        <li class="has-submenu">
                            <a href="{{ route('home') }}"><span>Home</span></a>
                        </li>
                        <li class="has-submenu full-width">
                            <a href="{{ route('products') }}"><span>Shop</span></a>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('products') }}"><span>Products</span></a>
                        </li>
                        <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                            <ul class="submenu-nav">
                                <li><a href="../shop-size-chart.blade.php">Size chart</a></li>
                                <li><a href="../shop-shipping-policy.blade.php">Shipping policy</a></li>
                                <li><a href="../about.blade.php">About</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#/"><span>Blog</span></a>
                        </li>
                        <li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
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
                                        <li><a href="/login">Login</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="{{ route('register') }}">Register</a></li>
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
                                <form action="{{ route('products') }}?search{{ request('search') }}" method="GET">
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
