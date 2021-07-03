<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{


    public function showProducts()
    {
        return view('shop', ['products' => Product::all()]);
    }

    public function showSingle(Product $product)
    {
        return view('shop-single', ['product' => $product]);
    }
}
