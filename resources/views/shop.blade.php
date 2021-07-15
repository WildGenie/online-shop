<head>
    <title>{{ $title }}</title>
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

              <!--== Products sorting filters ==-->
              <x-sort-filter :sort="$sort"/>

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

                    <!--== Pagination Links ==-->
                    {{ $products->links() }}

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <x-product-sidebar :categories="$categories" :title="$title" :colors="$colors"/>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->



</x-layout>
