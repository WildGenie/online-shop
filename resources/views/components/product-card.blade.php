@props(['product'])

<div class="col-lg-6">
    <!--== Start Product Info Area ==-->
    <div class="product-single-info">
        <h4 class="title">{{ $product->title }}</h4>
        <div class="prices">
            <span class="price">Tk {{ $product->price }}</span>
        </div>
        <div class="star-content">
            <x-product-stars :product="$product"/>
        </div>
        <p>{{ $product->description }}</p>
        <div class="product-select-action">
            <div class="select-item">
                <div class="select-size-wrap">
                    <span>Size :</span>
                    <ul>
                        <li class="active"><a href="#/">s</a></li>
                        <li><a href="#/">m</a></li>
                        <li><a href="#/">l</a></li>
                        <li><a href="#/">xl</a></li>
                    </ul>
                </div>
            </div>
            <div class="select-item">
                <div class="select-color-wrap">
                    <span>Color :</span>
                    <ul>
                        <li class="purple active"></li>
                        <li class="violet"></li>
                        <li class="black"></li>
                        <li class="pink"></li>
                        <li class="orange"></li>
                    </ul>
                </div>
            </div>
            <div class="select-item">
                <div class="select-material-wrap">
                    <span>Material :</span>
                    <ul>
                        <li class="active"><a href="#/">metal</a></li>
                        <li><a href="#/">resin</a></li>
                        <li><a href="#/">leather</a></li>
                        <li><a href="#/">slag</a></li>
                        <li><a href="#/">fiber</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-action-simple">
            <div class="product-quick-action">
                <div class="product-quick-qty">
                    <span>Quantity:</span>
                    <div class="pro-qty">
                        <input type="text" id="quantity" title="Quantity" value="1">
                    </div>
                </div>
            </div>
            <div class="cart-wishlist-button">
                <a href="shop-cart.blade.php" class="btn-cart">Add to cart</a>
                <div class="product-wishlist">
                    <a class="add-wishlist" href="wishlist.html">
                            <span class="icon">
                              <i class="bardy bardy-wishlist"></i>
                              <i class="hover-icon bardy bardy-wishlist"></i>
                            </span>
                    </a>
                </div>
            </div>
            <div class="buy-now-btn">
                <button class="btn btn-Buy">Buy it now</button>
            </div>
        </div>
        <div class="product-action-bottom">
            <div class="social-sharing">
                <span>Share:</span>
                <div class="social-icons">
                    <a href="#/"><i class="shopify-social-icon-facebook-rounded color"></i></a>
                    <a href="#/"><i class="shopify-social-icon-twitter-rounded color"></i></a>
                    <a href="#/"><i class="shopify-social-icon-googleplus-rounded color"></i></a>
                    <a href="#/"><i class="shopify-social-icon-pinterest-rounded color"></i></a>
                </div>
            </div>
            <div class="text-info">
                <p>Guaranteed safe checkout</p>
            </div>
        </div>
    </div>
    <!--== End Product Info Area ==-->
</div>
