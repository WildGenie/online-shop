@props(['product'])

<!--== Start Shop Item ==-->
<div {{ $attributes->merge(['class' => 'product-item']) }}>
    <div class="inner-content">
        <div class="product-thumb">
            <a href="{{ route('products') }}/{{ $product->slug }}">
                <img class="w-100" src="/storage/{{ $product->image }}" alt="Image-HasTech">
            </a>
            <div class="product-action">
                <div class="addto-wrap">
                    @auth
                        <a class="add-cart" href="{{ route('cart-add', [$product->id]) }}">
                    @else
                        <a class="add-cart" href="{{ route('register') }}">
                    @endauth
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
                <h4 class="title">
                    <a href="{{ route('products') }}/{{ $product->slug }}">{{ $product->title }}</a>
                </h4>
                <div class="star-content">

                    <x-product-stars :product="$product"/>

                </div>
                <div class="prices">
                    <span class="price">USD {{ $product->price }} </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Shop Item ==-->
