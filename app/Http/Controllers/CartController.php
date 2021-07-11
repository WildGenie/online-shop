<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function show()
    {
        $userId = auth()->id();

        $items = Cart::query()
            ->where('user_id', '=', $userId)
            ->get();

        $amount = collect($items)->sum('price');

        return view('shop-cart', [
            'title' => 'Your shopping cart',
            'items' => $items,
            'amount' => $amount,
        ]);
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $userId = auth()->id();

        $cartQuery = Cart::query()->where("carts.user_id", "=", $userId);

        $number = 1;
        $quantity = 1;
        $price = $product->price * $quantity;

        if($cartQuery) {
            $number = Cart::query()
                ->select("*")
                ->where("carts.user_id", "=", $userId)
                ->get()
                ->count();
        }

        Cart::create([
            'user_id' => $userId,
            'number' => ++$number,
            'quantity' => $quantity,
            'title' => $product->title,
            'description' => $product->description,
            'image' => $product->image,
            'color' => $product->color,
            'price' => $price,
            'stars' => $product->stars,
        ]);

        return redirect()->route('products')->with('success', 'Your item was added');
    }

    public function removeCart($id)
    {
        $item = Cart::find($id);

        $item->delete();

        return redirect()->route('cart')->with('success', 'Your item was deleted');
    }

    public function clearCart()
    {
        Cart::query()->delete();

        return redirect()->route('cart')->with('success', 'Your items was deleted');
    }

    public function showCheckout()
    {
        $userId = auth()->id();

        $items = Cart::query()
            ->where('user_id', '=', $userId)
            ->get();

        $amount = collect($items)->sum('price');

        return view('shop-checkout', [
            'items' => $items,
            'amount' => $amount,
        ]);
    }
}
