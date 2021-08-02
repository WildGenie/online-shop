<div class="nav-short-area">
    <form action="#" method="GET">
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort by
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach($sort as $sortValue)
                    <a class="dropdown-item"
                       href="{{ route('products') }}?sort={{ $sortValue['url'] }}&{{ http_build_query(request()->except('sort', 'page')) }}">
                        {{ $sortValue['name'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </form>
</div>
