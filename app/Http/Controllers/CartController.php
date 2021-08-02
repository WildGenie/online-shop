<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function showCart()
    {
        return view('shop-cart', [
            'title' => 'Your shopping cart'
        ]);
    }

    public function addToBag($id, $bag, Request $request)
    {
        $product = Product::find($id);

        $cart = session()->get($bag);

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
                    'quantity' => $quantity,
                    'price' => $price,
                    'material' => $material,
                    'color' => $color,
                    'size' => $size,
                    'slug' => $product->slug,
                    'title' => $product->title,
                    'image' => $product->image,
                ]
            ];

            session()->put($bag, $cart);
//            session()->push('user_id', Auth::user()->id);

            return redirect()->back()->with('success', 'Product added to ' .$bag. ' successfully!');
        }

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put($bag, $cart);

            return redirect()->back()->with('success', 'Product added to ' .$bag . ' successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            'quantity' => $quantity,
            'price' => $price,
            'material' => $material,
            'color' => $color,
            'size' => $size,
            'slug' => $product->slug,
            'title' => $product->title,
            'image' => $product->image,
        ];

        session()->put($bag, $cart);

        return redirect()->back()->with('success', 'Product added to ' . $bag . ' successfully!');
    }

    public function deleteFromBag($id, $bag)
    {
        if(!$id) {
            return redirect()->route('cart')->with('success', 'Product not in the cart!');
        }

        $cart = session()->get($bag);

        if(isset($cart[$id])) {
            unset($cart[$id]);

            session()->put($bag, $cart);
        }

        return redirect()->route($bag)->with('success', 'Product removed successfully!');
    }

    public function clearBag($bag)
    {
        session()->forget($bag);

        return redirect()->back()->with('success', 'Your ' .$bag. ' was cleared!');
    }

    public function checkButton($id, Request $request)
    {
        if ($request['add'] && $request['add'] == 'cart') {
            return $this->addToBag($id, 'cart', $request);
        }

        if ($request['add'] && $request['add'] == 'wishlist') {
            return $this->addToBag($id, 'wishlist', $request);
        }

        if ($request['add'] && $request['add'] == 'buy') {
            $this->addToBag($id, 'cart', $request);
            return redirect()->route('checkout')->with('success', 'Now you can buy it!');
        }
    }

}
