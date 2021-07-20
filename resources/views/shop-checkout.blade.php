<head>
    <title>{{ $title }}</title>
</head>

<x-layout>
    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-information-area">
      <div class="container">
        <div class="product-information">
          <div class="row">
            <div class="col-lg-7">
              <div class="edit-checkout-head">
                <div class="header-logo-area">
                  <a href="index.blade.php">
                    <img class="logo-main" src="{{asset('img/logo.svg')}}" alt="Logo">
                  </a>
                </div>
                <div class="breadcrumb-area">
                  <ul>
                    <li><a class="active" href="{{ route('cart') }}">Cart</a><i class="fa fa-angle-right"></i></li>
                    <li class="active">Information<i class="fa fa-angle-right"></i></li>
                    <li>Shipping<i class="fa fa-angle-right"></i></li>
                    <li>Payment</li>
                  </ul>
                </div>
              </div>
              <div class="edit-checkout-information">
                <h4 class="title">Contact information</h4>
                <div class="logged-in-information">
                    <div>You:</div>
                  <p>
                    <div class="name">{{ auth()->user()->name }}</div>
                    <div>{{ auth()->user()->email }}</div>
                  </p>
                </div>
                <form action="{{ route('checkout') }}" method="post" class="edit-checkout-form">
                    @csrf
                  <h4 class="title">Shipping address</h4>
                  <div class="row row-gutter-12">
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <input type="text" name="name" class="form-control" id="floatingInputGrid" placeholder="name" value="{{ auth()->user()->name }}">
                        <label for="floatingInputGrid">First name (optional)</label>
                          @error('name')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <input type="text" name="lastname" class="form-control" id="floatingInput2Grid" placeholder="name" value="Demo">
                        <label for="floatingInput2Grid">Last name</label>
                          @error('lastName')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" name="address" class="form-control" id="floatingInput3Grid" placeholder="address" value="">
                        <label for="floatingInput3Grid">Address</label>
                          @error('address')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <select name="country" class="form-select form-control" id="floatingInput6rid" aria-label="Floating label select example">
                          <option value="bangladesh" selected>Bangladesh</option>
                          <option value="afganistan">Afghanistan</option>
                          <option value="alandislands">Åland Islands</option>
                          <option value="albania">Albania</option>
                        </select>
                        <div class="field-caret"></div>
                        <label for="floatingInput6rid">Country/Region</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <input type="text" name="postalcode" class="form-control" id="floatingInput7Grid" placeholder="address" value="">
                        <label for="floatingInput7Grid">Postal code</label>
                          @error('postalCode')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="btn-box">
                        <button type="submit" class="btn-shipping">Continue to shipping</button>
                        <a class="btn-return" href="{{ route('cart') }}">Return to cart</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="shipping-cart-subtotal-wrapper">
                <div class="shipping-cart-subtotal">
                    <?php $amount = 0 ?>
                    @if (auth()->check() && session('cart'))
                        @foreach (session('cart') as $id => $item)
                            <?php $amount += $item['price'] * $item['quantity'] ?>
                            <div class="shipping-cart-item">
                                <div class="thumb">
                                    <img src="storage/{{ $item['image'] }}" alt="">
                                    <span class="quantity">{{ $item['quantity'] }}</span>
                                    <a class="remove" href="{{ route('product-remove', ['id' => $item['id'], 'bag' => 'cart']) }}"><i class="fa fa-trash-o"></i></a>
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ $item['title'] }}</h4>
                                    <span class="info">{{ $item['size'] }} / {{ $item['color'] }}</span>
                                    <span class="price">${{ $item['price'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                  <div class="shipping-subtotal">
                    <p><span>Subtotal</span><span><strong>USD ${{ $amount }}</strong></span></p>
                    <p><span>Shipping</span><span>Calculated at next step</span></p>
                  </div>
                  <div class="shipping-total">
                    <p class="total">Total</p>
                    <p class="price">USD ${{ $amount }}</p>
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
