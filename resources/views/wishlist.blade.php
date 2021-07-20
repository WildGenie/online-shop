<head>
    <title>{{ $title }}</title>
</head>

<x-layout>

    <x-page-header :title="$title"/>

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area shopping-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shopping-cart-wrap">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-cart">Add To Cart</th>
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (auth()->check() && session('wishlist'))
                                    @foreach (session('wishlist') as $id => $item)
                                        <tr>
                                            <td class="pro-thumbnail">
                                                <a href="{{ route('products') }}/{{ $item['slug'] }}"><img src="storage/{{ $item['image'] }}" alt="Image-HasTech"></a>
                                            </td>
                                            <td class="pro-title">
                                                <h4 class="title"><a href="{{ route('products') }}/{{ $item['slug']}}">{{ $item['title'] }}</a></h4>
                                                <span>{{ $item['size'] }} / {{ $item['color'] }} / {{ $item['material'] }}</span>
                                            </td>
                                            <td class="pro-price">
                                                <span class="amount">USD ${{ $item['price'] }}</span>
                                            </td>
                                            <td class="pro-add">
                                                <a href="{{ route('product-add', ['id' => $item['id'], 'bag' => 'cart']) }}">Add
                                                    <i class="icon bardy bardy-shopping-cart"></i>
                                                </a>
                                            </td>
                                            <td class="pro-remove">
                                                <a class="remove" href="{{ route('product-remove', ['id' => $item['id'], 'bag' => 'wishlist']) }}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="cart-buttons">
                                    <a class="theme-default-button" href="{{ route('products') }}">Continue Shopping</a>
                                    <a class="theme-default-button" href="{{ route('bag-clear', ['bag' => 'wishlist']) }}">Clear Wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->

</x-layout>
