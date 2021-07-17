<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;

use App\Filters\ProductFilter;
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

    public function addToCart($id, Request $request)
    {

        if (!auth()->check()) {
            return redirect()->route('register');
        }

        $product = Product::find($id);

        $cart = session()->get('cart');

        // initial data
        $quantity = 1;
        $size = 'm';
        $color = $product->color;
        $material = 'leather';
        $price = $product->price;

        // check on request / if user adds product from the single product page
        if ($request['size'] && $request['color'] && $request['material'] && $request['quantity']) {
            $quantity = $request['quantity'];
            $size = $request['size'];
            $color = $request['color'];
            $material = $request['material'];
        }

        if (!$cart) {
            $cart = [
                $id => [
                    'id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $price,
                    'material' => $material,
                    'color' => $color,
                    'size' => $size,
                    'slug' => $product->slug,
                    'title' => $product->title,
                    'description' => $product->description,
                    'image' => $product->image,
                    'stars' => $product->stars,
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            'id' => $product->id,
            'quantity' => $quantity,
            'price' => $price,
            'material' => $material,
            'color' => $color,
            'size' => $size,
            'slug' => $product->slug,
            'title' => $product->title,
            'description' => $product->description,
            'image' => $product->image,
            'stars' => $product->stars,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function deleteFromCart($id)
    {
        if($id) {
            $cart = session()->get('cart');

            if(isset($cart[$id])) {
                unset($cart[$id]);

                session()->put('cart', $cart);
            }

            return redirect()->route('cart')->with('success', 'Product removed successfully!');
        }
    }

    public function clearCart()
    {
        session()->forget('cart');

        return redirect()->back()->with('success', 'Your cart was cleared!');
    }
}
