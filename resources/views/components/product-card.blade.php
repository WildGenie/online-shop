@props(['product'])

<div class="col-lg-6">
    <!--== Start Product Info Area ==-->
    <div class="product-single-info">
        <h4 class="title">{{ $product->title }}</h4>
        <div class="prices">
            <span class="price">USD ${{ $product->price }}</span>
        </div>
        <div class="star-content">
            <x-product-stars :product="$product"/>
        </div>
        <p>{{ $product->description }}</p>
        <form action="{{ route('cart-add', $product->id) }}" method="get">
            <div class="product-select-action">
                <div class="select-item">
                    <div class="select-size-wrap">
                        <span class="pe-3">Size:</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="size" value="s">
                            <label class="form-check-label" for="inlineRadio1">s</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="size" value="m">
                            <label class="form-check-label" for="inlineRadio2">m</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="size" value="l">
                            <label class="form-check-label" for="inlineRadio3">l</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="size" value="xl">
                            <label class="form-check-label" for="inlineRadio3">xl</label>
                        </div>
                    </div>
                </div>
                <div class="select-item">
                    <div class="select-color-wrap">
                        <span>Color:</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="color" value="red">
                            <label class="form-check-label" for="inlineRadio1">red</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="color" value="green">
                            <label class="form-check-label" for="inlineRadio2">green</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="color" value="blue">
                            <label class="form-check-label" for="inlineRadio3">blue</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="color" value="black">
                            <label class="form-check-label" for="inlineRadio3">black</label>
                        </div>
                    </div>
                </div>
                <div class="select-item">
                    <div class="select-material-wrap">
                        <span class="pe-1">Material:</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="material" value="metal">
                            <label class="form-check-label" for="inlineRadio1">metal</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="material" value="resin">
                            <label class="form-check-label" for="inlineRadio2">resin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="material" value="leather">
                            <label class="form-check-label" for="inlineRadio3">leather</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="material" value="fiber">
                            <label class="form-check-label" for="inlineRadio3">fiber</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="material" value="slag">
                            <label class="form-check-label" for="inlineRadio3">slag</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-action-simple">
                <div class="product-quick-action">
                    <div class="product-quick-qty">
                        <span>Quantity:</span>
                        <div class="pro-qty">
                            <input type="text" name="quantity" value="1">
                        </div>
                    </div>
                </div>
                <div class="cart-wishlist-button">
                    <button type="submit" class="btn-cart">Add to cart</button>
                    <div class="product-wishlist">
                        <button type="submit" class="add-wishlist">
                            <i class="bardy bardy-wishlist"></i>
                        </button>
                    </div>
                </div>
                <div class="buy-now-btn">
                    <button type="submit" class="btn btn-Buy">Buy it now</button>
                </div>
            </div>
        </form>
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
