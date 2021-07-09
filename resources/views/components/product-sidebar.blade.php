@props(['categories', 'title', 'color'])

@if($title == 'Product')
    <!--== Start Product Sidebar Wrapper ==-->
    <div class="product-sidebar-wrapper">
        <!--== Start Product Sidebar Item ==-->
        <div class="product-sidebar-item">
            <h4 class="product-sidebar-title">Search</h4>
            <div class="product-sidebar-body">
                <div class="product-sidebar-search-form">
                    <form action="#" method="GET">
                        <div class="form-group">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <input class="form-control" type="search" name="search" placeholder="Enter key words">
                            <button type="submit" class="btn-src">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--== End Product Sidebar Item ==-->
    </div>

@else
<!--== Start Product Sidebar Wrapper ==-->
<div class="product-sidebar-wrapper">
    <!--== Start Product Sidebar Item ==-->
    <div class="product-sidebar-item">
        <h4 class="product-sidebar-title">Search</h4>
        <div class="product-sidebar-body">
            <div class="product-sidebar-search-form">
                <form action="#" method="GET">
                    <div class="form-group">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('sort'))
                            <input type="hidden" name="sort" value="{{ request('sort') }}">
                        @endif
                        @if (request('color'))
                            <input type="hidden" name="sort" value="{{ request('sort') }}">
                        @endif
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
                    <a href="{{ route('products') }}?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">{{ $category->name }}
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
                @foreach($color as $value)
                    <a href="{{ route('products') }}?color={{ $value }}&{{ http_build_query(request()->except('color', 'page')) }}">
                        <div class="{{ $value }}"></div>
                    </a>
                @endforeach
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
</div>
<!--== End Product Sidebar Wrapper ==-->

@endif
