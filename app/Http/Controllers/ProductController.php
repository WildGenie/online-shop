<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{


    public function showProducts(ProductFilter $request)
    {

        $products = Product::filter($request)
            ->with('category')
            ->paginate(25);

        return view('shop', [
            'title' => 'Products',
            'products' => $products,
            'categories' => Category::all(),
            'sort' => Product::sort(),
            'colors' => Product::color(),
        ]);
    }

    public function showSingle(Product $product)
    {
        return view('shop-single', [
            'title' => 'Product',
            'product' => $product,
            'categories' => Category::all()
        ]);
    }
}
