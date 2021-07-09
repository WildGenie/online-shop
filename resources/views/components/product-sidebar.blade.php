@props(['categories', 'title', 'colors'])

@if($title == 'Product')
    <!--== Start Product Sidebar Wrapper ==-->
    <div class="product-sidebar-wrapper">
        <!--== Start Product Sidebar Item ==-->
        <x-filters class="product-sidebar-search-form">

            <x-slot name="title">Search</x-slot>

            <form action="#" method="GET">
                <div class="form-group">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input class="form-control" type="search" name="search" placeholder="Enter key words">
                    <button type="submit" class="btn-src">Search</button>
                </div>
            </form>
        </x-filters>
        <!--== End Product Sidebar Item ==-->
    </div>

@else
<!--== Start Product Sidebar Wrapper ==-->
<div class="product-sidebar-wrapper">
    <!--== Start Product Sidebar Item ==-->
    <x-filters class="product-sidebar-search-form">

        <x-slot name="title">Search</x-slot>

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
    </x-filters>
    <!--== End Product Sidebar Item ==-->

    <!--== Start Sidebar Item ==-->
    <x-filters>

        <x-slot name="title">Categories</x-slot>

        @foreach($categories as $category)
            <a href="{{ route('products') }}?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">{{ $category->name }}
                <span>({{ $category->products->count() }})</span>
            </a>
        @endforeach
    </x-filters>
    <!--== End Sidebar Item ==-->

    <!--== Start Sidebar Item ==-->
    <x-filters>

        <x-slot name="title">Colors</x-slot>

        @foreach($colors as $color)
            <a href="{{ route('products') }}?color={{ $color }}&{{ http_build_query(request()->except('color', 'page')) }}">
                <div class="{{ $color }}"></div>
            </a>
        @endforeach
    </x-filters>
    <!--== End Sidebar Item ==-->
</div>
<!--== End Product Sidebar Wrapper ==-->

@endif
