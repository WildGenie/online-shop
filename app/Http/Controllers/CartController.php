<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

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
