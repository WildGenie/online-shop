<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
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
    return view('index', [
        'products' => Product::latest()->get(),
        'categories' => Category::all(),
        'posts' => Post::all(),
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
})->name('contact');

Route::get('/search', function () {
    return view('page-search', ['title' => 'Search']);
})->name('search');

Route::get('/policy', function () {
    return view('shop-shipping-policy', ['title' => 'Shipping policy']);
})->name('policy');

Route::get('/sizes', function () {
    return view('shop-size-chart', ['title' => 'Size chart']);
})->name('size');

Route::get('/blog', [PostController::class, 'show'])->name('blog');
Route::get('/blog/{post:slug}', [PostController::class, 'showSingle']);

Route::get('/products', [ProductController::class, 'showProducts'])->name('products');
Route::get('/products/{product:slug}', [ProductController::class, 'showSingle']);


//=====================  shopping cart
Route::get('/shopping-cart', [ProductController::class, 'showCart'])->name('cart');
Route::get('/add-product/{product:id}', [ProductController::class, 'addToCart'])->name('cart-add');
Route::get('/delete-product/{product:id}', [ProductController::class, 'deleteFromCart'])->name('cart-remove');
Route::get('/clear-cart', [ProductController::class, 'clearCart'])->name('cart-clear');

Route::get('/shopping-checkout', [CartController::class, 'showCheckout'])->name('checkout');


//=====================  registration / login routes
Route::get('/register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'create'])->middleware('guest');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'create'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');
