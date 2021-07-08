<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{


    public function showProducts(Request $request)
    {
        $products = Product::latest()
            ->filter($request->all('category', 'search'))
            ->with('category')
            ->get();

        return view('shop', [
            'title' => 'Products',
            'products' => $products,
            'categories' => Category::all(),
        ]);
    }

    public function showSingle(Product $product)
    {
        return view('shop-single', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }
}
