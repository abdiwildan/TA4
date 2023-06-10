<?php

use App\Models\produk;
use Illuminate\Support\Facades\Route;

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
        "title" => "Home"
    ]);
});
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



Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk",
        "category" => produk::all()
    ]);
});