<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

use App\Filters\ProductFilter;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

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

    public function showCart()
    {
        return view('shop-cart', [
            'title' => 'Your shopping cart'
        ]);
    }

//    public function addToCart($product)
//    {
//        $Product = Product::find($product);
//        $userID = auth()->id();
//
//        // add the product to cart
//        \Cart::session($userID)->add(array(
//            'id' => $Product->id,
//            'category_id' => $Product->category_id,
//            'slug' => $Product->slug,
//            'title' => $Product->title,
//            'description' => $Product->description,
//            'quantity' => 1,
//            'name' => 'Product',
//            'image' => $Product->image,
//            'price' => $Product->price,
//            'stars' => $Product->stars,
//            'attributes' => array(),
//        ));
//
//        $items = \Cart::getContent();
//
//        return view('shop', [
//            'items' => $items,
//        ]);
//    }

//    public function addToCart($id)
//    {
//        $product = Product::find($id);
//
//        if(!$product) {
//
//            abort(404);
//
//        }
//
//        $cart = session()->get('cart');
//
//        // if cart is empty then this the first product
//        if(!$cart) {
//
//            $cart = [
//                'id' => $product->id,
//                'category_id' => $product->category_id,
//                'slug' => $product->slug,
//                'title' => $product->title,
//                'description' => $product->description,
//                'quantity' => 1,
//                'image' => $product->image,
//                'price' => $product->price,
//                'stars' => $product->stars,
//            ];
//
//            session()->put('cart', $cart);
//
//            return redirect()->back()->with('success', 'Product added to cart successfully!');
//        }
//
//        // if cart not empty then check if this product exist then increment quantity
//        if(isset($cart[$id])) {
//
//            $cart[$id]['quantity']++;
//
//            session()->put('cart', $cart);
//
//            return redirect()->back()->with('success', 'Product added to cart successfully!');
//
//        }
//
//        // if item not exist in cart then add to cart with quantity = 1
//        $cart[$id] = [
//            'id' => $product->id,
//            'category_id' => $product->category_id,
//            'slug' => $product->slug,
//            'title' => $product->title,
//            'description' => $product->description,
//            'quantity' => 1,
//            'image' => $product->image,
//            'price' => $product->price,
//            'stars' => $product->stars,
//        ];
//
//        session()->put('cart', $cart);
//
//        return redirect()->back()->with('success', 'Product added to cart successfully!');
//    }
}
