<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can auth web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', ['products' => Product::all(), 'categories' => Category::all()]);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');

Route::get('/blog', function () {
    return view('blog', ['title' => 'News']);
})->name('blog');

Route::get('/policy', function () {
    return view('shop-shipping-policy', ['title' => 'Shipping policy']);
})->name('policy');

Route::get('/sizes', function () {
    return view('shop-size-chart', ['title' => 'Size chart']);
})->name('size');

Route::get('/products', [ProductController::class, 'showProducts'])->name('products');
Route::get('/products/{product:slug}', [ProductController::class, 'showSingle']);

Route::get('/shopping-cart', [ProductController::class, 'showCart'])->name('cart');
Route::get('/shopping-cart/{product:id}', [ProductController::class, 'addToCart'])->name('cart-add');


Route::get('/cart', function () {
    return view('shop-cart');
});

// registration / login routes
Route::get('/register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'create'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');
