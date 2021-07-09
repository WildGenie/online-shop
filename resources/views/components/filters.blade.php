<!--== Start Sidebar Item ==-->
<div {{ $attributes->merge(['class' => 'product-sidebar-item']) }}>
    <h4 class="product-sidebar-title">{{ $title }}</h4>
    <div class="product-sidebar-body">
        <div class="@if($title == 'Colors') product-sidebar-color-menu @else product-sidebar-nav-menu @endif">
            {{ $slot }}
        </div>
    </div>
</div>
<!--== End Sidebar Item ==-->
