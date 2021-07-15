<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show()
    {
        $userId = auth()->id();

        $items = Cart::query()
            ->where('user_id', '=', $userId)
            ->get();

        $amount = $items->sum('price');

        return view('shop-cart', [
            'title' => 'Your shopping cart',
            'items' => $items,
            'amount' => $amount,
        ]);
    }

    public function addToCart($id, Request $request)
    {
        $product = Product::find($id);
        $userId = auth()->id();

        // initial data
        $quantity = 1;
        $size = 'm';
        $color = $product->color;
        $material = 'leather';
        $price = $product->price;

        // check on request / if user adds product from the single product page
        if ($request['size'] && $request['color'] && $request['material'] && $request['quantity']) {
            $size = $request['size'];
            $color = $request['color'];
            $material = $request['material'];
            $quantity = $request['quantity'];
            $price = $product->price * $quantity;
        }

        // check if product exist in shopping cart, if true then update
        $productInCart = Cart::query()->where('product_id', $id);

        if ($productInCart->exists()) {

            $quantity += 1;
            $price = $product->price * $quantity;

            $productInCart->update([
                'color' => $color,
                'size' => $size,
                'material' => $material,
                'quantity' => $quantity,
                'price' => $price
            ]);

            return redirect()->back()->with('success', 'Your cart was updated');
        }

        Cart::create([
            'user_id' => $userId,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'color' => $color,
            'size' => $size,
            'material' => $material,
            'slug' => $product->slug,
            'title' => $product->title,
            'description' => $product->description,
            'image' => $product->image,
            'price' => $price,
            'stars' => $product->stars,
        ]);

        return redirect()->back()->with('success', 'Your cart was updated');
    }

    public function removeCart($id)
    {
        Cart::find($id)->delete();

        return redirect()->route('cart')->with('success', 'Your item was deleted');
    }

    public function clearCart()
    {
        $userId = auth()->id();

        Cart::query()
            ->where('user_id', '=', $userId)
            ->delete();

        return redirect()->route('cart')->with('success', 'Your items was deleted');
    }

    public function showCheckout()
    {
        $userId = auth()->id();

        $items = Cart::query()
            ->where('user_id', $userId)
            ->get();

        $amount = $items->sum('price');

        return view('shop-checkout', [
            'items' => $items,
            'amount' => $amount
        ]);
    }
}
