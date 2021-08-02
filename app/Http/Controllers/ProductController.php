<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use App\Filters\ProductFilter;

class ProductController extends Controller
{

    public function showProducts(ProductFilter $request)
    {

        $products = Product::filter($request)
            ->with('category')
            ->paginate(9);

        $categories = Category::with('products')->get();

        return view('shop', [
            'title' => 'Products',
            'products' => $products,
            'categories' => $categories,
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
