<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
// use App\Http\Conttrollers\

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
    return view('Home');
});
Route::get('/About', function () {
    return view('pages.about');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/cart', function () {
    return view('pages.cart');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cart', function () {
    return view('pages.cart');
});


Route::get('/userAccount', function () {
    return view('pages.userAccount');
});
Route::get('/choice', function () {
    return view('pages.choice');
});

Route::get('/single-product', function () {
    return view('pages.single-product');
});

Route::get('/checkout', function () {
    return view('pages.checkout');
});
// Route::get('/', [HomeController::class, 'index']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/view_categories', [AdminController::class, 'view_categories']);
Route::post('/add_categories', [AdminController::class, 'add_categories']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

Route::get('/view_products', [AdminController::class, 'view_products']);

Route::post('/add_product', [AdminController::class, 'add_product']);
Route::get('/show_products', [AdminController::class, 'show_products']);



