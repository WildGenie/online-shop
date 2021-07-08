<head>
    <title>Product – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
</head>

<x-layout>

    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h4 class="title" data-aos="fade-down" data-aos-duration="1200">Products</h4>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1000">
                <ul class="breadcrumb">
                  <li><a href="index.blade.php">Home</a></li>
                  <li class="breadcrumb-sep">-</li>
                  <li>Products</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-grid-list-area">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="col-lg-9">
            <div class="product-header-wrap">
              <div class="grid-list-option">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><span data-bg-img="{{asset('img/icons/1.webp')}}"></span></button>
                    <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><span data-bg-img="{{asset('img/icons/1.webp')}}"></span></button>
                  </div>
                </nav>
              </div>
              <div class="show-product-area">
                <p class="show-product">Showing 1 - 15 of 33 result</p>
              </div>
              <div class="nav-short-area">
                <div class="toolbar-shorter">
                  <label for="SortBy">Sort by</label>
                  <select id="SortBy" class="form-select" aria-label="Sort by">
                    <option value="manual">Featured</option>
                    <option value="best-selling">Best Selling</option>
                    <option value="title-ascending" selected>Alphabetically, A-Z</option>
                    <option value="title-descending">Alphabetically, Z-A</option>
                    <option value="price-ascending">Price, low to high</option>
                    <option value="price-descending">Price, high to low</option>
                    <option value="created-descending">Date, new to old</option>
                    <option value="created-ascending">Date, old to new</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="product-body-wrap">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                  <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-xl-4">
                            <x-products-card :product="$product"/>
                        </div>
                    @endforeach
                  </div>

                  <x-pagination />

                </div>
                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                  <div class="row">
                    @foreach($products as $product)
                        <div class="col-12">
                            <x-products-card :product="$product" class="product-item-list" />
                        </div>
                    @endforeach
                  </div>

                  <x-pagination />

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <!--== Start Product Sidebar Wrapper ==-->
            <div class="product-sidebar-wrapper">
              <!--== Start Product Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Search</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-search-form">
                    <form action="#" method="GET">
                      <div class="form-group">
                        <input class="form-control" type="search" name="search" placeholder="Enter key words">
                        <button type="submit" class="btn-src">Search</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--== End Product Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Categories</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-nav-menu">
                    @foreach($categories as $category)
                          <a href="{{ route('products') }}?category={{ $category->slug }}">{{ $category->name }}
                              <span>({{ $category->products->count() }})</span>
                          </a>
                      @endforeach
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Vendors</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-nav-menu">
                    <a href="#/">Vendor <span>1</span></a>
                    <a href="#/">Vendor <span>10</span></a>
                    <a href="#/">Vendor <span>11</span></a>
                    <a href="#/">Vendor <span>2</span></a>
                    <a href="#/">Vendor <span>3</span></a>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item">
                <h4 class="product-sidebar-title">Products Types</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-nav-menu">
                    <a href="#/">Type <span>1</span></a>
                    <a href="#/">Type <span>10</span></a>
                    <a href="#/">Type <span>11</span></a>
                    <a href="#/">Type <span>2</span></a>
                    <a href="#/">Type <span>3</span></a>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item mb-5 pb-2">
                <h4 class="product-sidebar-title">Color</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-color-menu">
                    <div class="red"></div>
                    <div class="green"></div>
                    <div class="blue"></div>
                    <div class="yellow"></div>
                    <div class="white"></div>
                    <div class="gold"></div>
                    <div class="gray"></div>
                    <div class="magenta"></div>
                    <div class="maroon"></div>
                    <div class="navy"></div>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item mb-5 pb-2">
                <h4 class="product-sidebar-title">Size</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-size-menu">
                    <ul>
                      <li><a href="#/">s</a></li>
                      <li><a href="#/">m</a></li>
                      <li><a href="#/">l</a></li>
                      <li><a href="#/">xl</a></li>
                      <li><a href="#/">xxl</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="product-sidebar-item mb-5 pb-2">
                <h4 class="product-sidebar-title">Tags</h4>
                <div class="product-sidebar-body">
                  <div class="product-sidebar-tag-menu">
                    <ul>
                      <li><a href="#/">black</a></li>
                      <li><a href="#/">blue</a></li>
                      <li><a href="#/">fiber</a></li>
                      <li><a href="#/">gold</a></li>
                      <li><a href="#/">gray</a></li>
                      <li><a href="#/">green</a></li>
                      <li><a href="#/">l</a></li>
                      <li><a href="#/">leather</a></li>
                      <li><a href="#/">m</a></li>
                      <li><a href="#/">magenta</a></li>
                      <li><a href="#/">maroon</a></li>
                      <li><a href="#/">metal</a></li>
                      <li><a href="#/">navy</a></li>
                      <li><a href="#/">orange</a></li>
                      <li><a href="#/">pink</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->
            </div>
            <!--== End Product Sidebar Wrapper ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

</x-layout>
