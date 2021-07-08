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
                <form action="/products?search{{ request('search') }}" method="GET">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <input class="form-control" type="search" name="search" placeholder="Search our store">
                        <button class="btn-search" type="submit">Search</button>
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

</x-layout>
