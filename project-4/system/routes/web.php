<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('cart', function () {
    return view('cart');
});


Route::get('category', function () {
    return view('category');
});

Route::get('contact_process', function () {
    return view('contact_process');
});


Route::get('checkout', function () {
    return view('checkout');
});


Route::get('contact', function () {
    return view('contact');
});

Route::get('login', function () {
    return view('login');
});

Route::get('single-product', function () {
    return view('single-product');
});



Route::get('/tamplate', function () {
    return view('tamplate.base');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('beranda', [HomeController::class, 'showberanda']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

Route::get('kategori', [HomeController::class, 'showkategori']);

Route::get('promo', [HomeController::class, 'showpromo']);

Route::get('pelanggan', [HomeController::class, 'showpelanggan']);

Route::get('supplier', [HomeController::class, 'showsupplier']);

Route::get('login_admin', [AuthController::class, 'showlogin_admin']);

