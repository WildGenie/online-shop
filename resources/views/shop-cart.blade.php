<head>
    <title>Your Shopping Cart – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
</head>

<x-layout>
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area page-shopping-cart-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">Your Shopping Cart</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

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
                    <tr>
                      <td class="pro-thumbnail">
                        <a href="shop.blade.php"><img src="{{asset('img/shop/cart/table1.jpg')}}" alt="Image-HasTech"></a>
                      </td>
                      <td class="pro-title">
                        <h4 class="title"><a href="shop.blade.php">2. New badge product</a></h4>
                        <span>m / gold</span>
                      </td>
                      <td class="pro-price">
                        <span class="amount">Tk 80.00</span>
                      </td>
                      <td class="pro-quantity">
                        <div class="pro-qty">
                          <input type="text" id="quantity" title="Quantity" value="1">
                        </div>
                      </td>
                      <td class="pro-subtotal">
                        <span class="subtotal-amount">Tk 80.00</span>
                      </td>
                      <td class="pro-remove">
                        <a class="remove" href="#/"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pro-thumbnail">
                        <a href="shop.blade.php"><img src="{{asset('img/shop/cart/table2.jpg')}}" alt="Image-HasTech"></a>
                      </td>
                      <td class="pro-title">
                        <h4 class="title"><a href="shop.blade.php">5. Simple product</a></h4>
                      </td>
                      <td class="pro-price">
                        <span class="amount">Tk 50.00</span>
                      </td>
                      <td class="pro-quantity">
                        <div class="pro-qty">
                          <input type="text" id="quantity" title="Quantity" value="1">
                        </div>
                      </td>
                      <td class="pro-subtotal">
                        <span class="subtotal-amount">Tk 50.00</span>
                      </td>
                      <td class="pro-remove">
                        <a class="remove" href="#/"><i class="fa fa-trash-o"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="cart-buttons">
                    <a class="theme-default-button" href="#/">Update Cart</a>
                    <a class="theme-default-button" href="shop.blade.php">Continue Shopping</a>
                    <a class="theme-default-button" href="#/">Clear Cart</a>
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
                              <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="amount"><span>Tk 130.00</span></span></td>
                              </tr>
                              <tr class="order-total">
                                <th>Grand Total</th>
                                <td>
                                  <span class="amount"><span>Tk 130.00</span></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="proceed-to-checkout">
                            <a class="shop-checkout-button" href="shop-checkout.blade.php">Proceed to Checkout</a>
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

</x-layout>
