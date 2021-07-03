<head>
    <title>Products Information – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
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
                    <img class="logo-main" src="{{asset('img/logo.png')}}" alt="Logo">
                  </a>
                </div>
                <div class="breadcrumb-area">
                  <ul>
                    <li><a class="active" href="shop-cart.blade.php">Cart</a><i class="fa fa-angle-right"></i></li>
                    <li class="active">Information<i class="fa fa-angle-right"></i></li>
                    <li>Shipping<i class="fa fa-angle-right"></i></li>
                    <li>Payment</li>
                  </ul>
                </div>
              </div>
              <div class="edit-checkout-information">
                <h4 class="title">Contact information</h4>
                <div class="logged-in-information">
                  <div class="thumb" data-bg-img="{{asset('img/photos/gravatar2.png')}}"></div>
                  <p>
                    <span class="name">Diana</span>
                    <span>(diana@example.com)</span>
                    <a href="#">Log out</a>
                  </p>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Keep me up to date on news and exclusive offers</label>
                </div>
                <div class="edit-checkout-form">
                  <h4 class="title">Shipping address</h4>
                  <div class="row row-gutter-12">
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGrid" placeholder="name" value="Diana">
                        <label for="floatingInputGrid">First name (optional)</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput2Grid" placeholder="name" value="Demo">
                        <label for="floatingInput2Grid">Last name</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput3Grid" placeholder="address" value="">
                        <label for="floatingInput3Grid">Address</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput4Grid" placeholder="address" value="">
                        <label for="floatingInput4Grid">Apartment, suite, etc. (optional)</label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput5Grid" placeholder="address" value="">
                        <label for="floatingInput5Grid">Apartment, suite, etc. (optional)</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <select class="form-select form-control" id="floatingInput6rid" aria-label="Floating label select example">
                          <option selected>Bangladesh</option>
                          <option value="1">Afghanistan</option>
                          <option value="2">Åland Islands</option>
                          <option value="3">Albania</option>
                        </select>
                        <div class="field-caret"></div>
                        <label for="floatingInput6rid">Country/Region</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput7Grid" placeholder="address" value="">
                        <label for="floatingInput7Grid">Postal code</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="btn-box">
                        <a class="btn-shipping" href="shop.blade.php">Continue to shipping</a>
                        <a class="btn-return" href="cart.html">Return to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="shipping-cart-subtotal-wrapper">
                <div class="shipping-cart-subtotal">
                  <div class="shipping-cart-item">
                    <div class="thumb">
                      <img src="{{asset('img/shop/cart/mini2.jpg')}}" alt="">
                      <span class="quantity">1</span>
                    </div>
                    <div class="content">
                      <h4 class="title">2. New badge product</h4>
                      <span class="info">m / gold</span>
                      <span class="price">$80.00</span>
                    </div>
                  </div>
                  <div class="shipping-cart-item">
                    <div class="thumb">
                      <img src="{{asset('img/shop/cart/mini1.jpg')}}" alt="">
                      <span class="quantity">1</span>
                    </div>
                    <div class="content">
                      <h4 class="title">5. Simple product</h4>
                      <span class="info">s</span>
                      <span class="price">$50.00</span>
                    </div>
                  </div>
                  <div class="shipping-subtotal">
                    <p><span>Subtotal</span><span><strong>$130.00</strong></span></p>
                    <p><span>Shipping</span><span>Calculated at next step</span></p>
                  </div>
                  <div class="shipping-total">
                    <p class="total">Total</p>
                    <p class="price"><span class="usd">USD</span>$149.50</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->
    <div class="edit-checkout-footer">
      <p>All rights reserved Demo diana</p>
    </div>

</x-layout>
