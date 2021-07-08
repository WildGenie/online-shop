<head>
    <title>Product – Diana – Furniture Store eCommerce Bootstrap5 Template</title>
</head>

<x-layout>

    <x-page-header :title="$title"/>

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
            <x-product-sidebar :categories="$categories" :title="$title"/>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

</x-layout>
