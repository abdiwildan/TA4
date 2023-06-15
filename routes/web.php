<?php

use App\Models\Product;
use App\Models\Category;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\ForgotpassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "category" => Category::all(),
        "products" =>Product::latest()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/forgotpass', [ForgotPassController::class, 'index']);


Route::get('/cart', function () {
    return view('cart' ,[
        "title" => "Cart"
    ]);
});

Route::get('/kategori', function () {
    return view('kategori' ,[
        "title" => "Cart"
    ]);
});





Route::get('/product',[ProductController::class,'index']);



Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "category" => Category::all(),
        // "products" =>Product::latest()->first()
    ]);
});

Route::get('/checkout', function () {
    return view('checkout',[
        "title" => "CheckOut"
    ]);
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');
Route::resource('/dashboard/products/', DashboardProductController::class);


Route::get('/dashboard/product/checkSlug', [DashboardProductController::class, 'checkSlug']);

Route::get('categories/{slug}',[CategoryController::class,'show'])->middleware('auth');



