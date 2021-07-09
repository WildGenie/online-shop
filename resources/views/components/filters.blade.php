<!--== Start Sidebar Item ==-->
<div {{ $attributes->merge(['class' => 'product-sidebar-item']) }}>
    <h4 class="product-sidebar-title">{{ $title }}</h4>
    <div class="product-sidebar-body">
        <div class="product-sidebar-nav-menu">
            {{ $slot }}
        </div>
    </div>
</div>
<!--== End Sidebar Item ==-->
