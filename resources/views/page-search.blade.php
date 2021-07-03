<head>
    <title>Search – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
</head>

<x-layout>

    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">Search</h4>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1000">
                <ul class="breadcrumb">
                  <li><a href="index.blade.php">Home</a></li>
                  <li class="breadcrumb-sep">-</li>
                  <li>Search</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Search Area Wrapper ==-->
    <section class="search-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 m-auto">
            <div class="search-form-wrap">
              <!--== Start Search Form ==-->
              <div class="search-form">
                <div class="content">
                  <h4 class="title">Search for products on our site</h4>
                </div>
                <form action="#">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" type="search" placeholder="Search our store">
                        <button class="btn-search">Search</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!--== End Search Form ==-->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Search Area Wrapper ==-->

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
