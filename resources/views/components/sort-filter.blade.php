<div class="nav-short-area">
    <form action="#" method="GET">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('products') }}?sort=stars-desc&{{ http_build_query(request()->except('sort', 'page')) }}">Best Selling</a>
                <a class="dropdown-item" href="{{ route('products') }}?sort=title-asc">Alphabetically, A-Z</a>
                <a class="dropdown-item" href="{{ route('products') }}?sort=title-desc">Alphabetically, Z-A</a>
                <a class="dropdown-item" href="{{ route('products') }}?sort=price-asc">Price, low to high</a>
                <a class="dropdown-item" href="{{ route('products') }}?sort=price-desc">Price, high to low</a>
                <a class="dropdown-item" href="{{ route('products') }}?sort=created_at-desc">Date, new to old</a>
                <a class="dropdown-item" href="{{ route('products') }}?sort=created_at-asc">Date, old to new</a>
            </div>
        </div>
    </form>
</div>
