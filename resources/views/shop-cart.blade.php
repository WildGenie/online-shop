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
                      <th class="pro-quantity">Quantity</th>
                      <th class="pro-subtotal">Total</th>
                      <th class="pro-remove">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $amount = 0 ?>
                    @if (auth()->check() && session('cart'))
                        @foreach (session('cart') as $id => $item)
                            <?php $amount += $item['price'] * $item['quantity'] ?>
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
                                <td class="pro-quantity">
                                    <div class="def-number-input number-input">
                                        {{ $item['quantity'] }}
                                    </div>
                                </td>
                                <td class="pro-subtotal">
                                    <span class="subtotal-amount">USD ${{ $item['price'] * $item['quantity'] }}</span>
                                </td>
                                <td class="pro-remove">
                                    <a class="remove" href="{{ route('cart-remove', $item['id']) }}"><i class="fa fa-trash-o"></i></a>
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
                    <a class="theme-default-button" href="{{ route('cart-clear') }}">Clear Cart</a>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="cart-payment">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="culculate-shipping">
                          <h4 class="title">Get shipping estimatesss</h4>
                          <div class="culculate-shipping-form">
                            <form action="#">
                              <div class="form-row">
                                <div class="col-12">
                                  <div class="form-group">
                                    <label class="sr-only" for="address_country" class="form-label">Address Country</label>
                                    <select id="address_country" class="form-select" aria-label="Address Country">
                                      <option selected>---</option>
                                      <option value="1">Afghanistan</option>
                                      <option value="2">Albania</option>
                                      <option value="3">Anguilla</option>
                                      <option value="4">Antigua & Barbuda</option>
                                      <option value="5">Argentina</option>
                                      <option value="6">Armenia</option>
                                      <option value="7">Aruba</option>
                                      <option value="8">Ascension Island</option>
                                      <option value="9">Australia</option>
                                      <option value="10">Austria</option>
                                      <option value="11">Azerbaijan</option>
                                      <option value="12">Bahamas</option>
                                      <option value="13">Bahrain</option>
                                      <option value="14">Bangladesh</option>
                                      <option value="15">Barbados</option>
                                      <option value="16">Belarus</option>
                                      <option value="17">Belgium</option>
                                      <option value="18">Belize</option>
                                      <option value="19">Benin</option>
                                      <option value="20">Brazil</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <label class="sr-only" for="address_zip" class="form-label">Zip/Postal Code</label>
                                    <input type="text" class="form-control" id="address_zip" placeholder="Zip/Postal Code">
                                  </div>
                                </div>
                                <div class="col-12">
                                  <div class="form-group">
                                    <a class="btn-calculate-shop" href="#/">Calculate shipping</a>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="cart-total">
                          <h4 class="title">Cart Summary</h4>
                          <table>
                            <tbody>
                              <tr class="order-total">
                                <th>Grand Total</th>
                                <td>
                                  <span class="amount"><span>USD {{ $amount }}</span></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="proceed-to-checkout">
                            <a class="shop-checkout-button" href="{{ route('checkout') }}">Proceed to Checkout</a>
                          </div>
                        </div>
                      </div>
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

</x-layout>
