@props(['product'])

@for($i = 0; $i <= $product->stars; $i++)
    <i class="fa fa-star-o"></i>
@endfor
