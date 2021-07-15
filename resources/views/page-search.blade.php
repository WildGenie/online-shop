<head>
    <title>{{ $title }}</title>
</head>

<x-layout>

    <x-page-header :title="$title" />

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
                <form action="{{ route('products') }}?search{{ request('search') }}" method="GET">
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
