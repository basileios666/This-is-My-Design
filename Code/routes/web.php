<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/* =================== Routes =================== */
Route::get('/', function (){
    return view('Home');
});

Route::get('/About', function (){
    return view('about');
});

Route::view('/shop','shop');
Route::view('/choice','choice');
Route::view('/single-product','single-product');
Route::view('/cart','cart');
Route::view('/checkout','checkout');
Route::view('/contact','contact');
Route::view('/404','404');

Route::view('/app','layouts.app');

// Route::get('/About', [PostController::class, 'index']);
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
