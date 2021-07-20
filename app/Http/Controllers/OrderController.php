<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showCheckout()
    {
        return view('shop-checkout', [
            'title' => 'Products Information'
        ]);
    }

    public function orderProduct(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required',
            'country' => 'required',
            'postalcode' => 'required|min:6|max:6',
        ]);

        if (!$validatedData) {
            return back()->withErrors([
                'name' => 'Email is incorrect',
                'lastName' => 'Password is incorrect',
                'address' => 'Address is incorrect',
                'postalCode' => 'Postal code is incorrect for this country',
            ]);
        }

        $product = session()->get('cart');
        $userId = auth()->id();

        foreach ($product as $id => $item) {
            Order::create([
                'user_id' => $userId,
                'address' => $request['address'],
                'country' => $request['country'],
                'postalcode' => $request['postalcode'],
                'status' => 'In process',
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'material' => $item['material'],
                'color' => $item['color'],
                'size' => $item['size'],
                'slug' => $item['slug'],
                'title' => $item['title'],
                'description' => $item['description'],
                'image' => $item['image'],
                'stars' => $item['stars'],
            ]);

            unset($product[$id]);
            session()->put('cart', $product);
        }


        return redirect()->route('home')->with('success', 'Your order is being processed!');
    }
}
