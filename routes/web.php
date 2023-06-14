<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
        "category" => Category::all()
    ]);
});

Route::get('/checkout', function () {
    return view('checkout',[
        "title" => "CheckOut"
    ]);
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');



Route::get('categories/{slug}',[CategoryController::class,'show']);

// Route::get('categories/{slug}',function(Category $category){
//     return view('product',[
//         'title' => $category->name_category,
//         'products'=> $category->product,
//         'category'=>$category->name_category,
//     ]);
// });

Route::resource('productcustom', 'Web\Product');