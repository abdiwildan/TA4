<?php

use App\Models\Kategori;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotpassController;
use App\Http\Controllers\ProductController;
use App\Models\Category;

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
        "category" => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
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



Route::get('/produk',[ProductController::class,'index']);

Route::get('produk/{slug}', [ProductController::class,'show']);


Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "category" => Category::all()
    ]);
});

Route::get('/checkout', function () {
    return view('checkout',[
        "title" => "CheckOut"
    ]);
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
});