<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/b', function () {
    return view('Navbar');
});

Route::get('/Home', function (){
return view('Home');
});



Route::get('/About', [PostController::class, 'index']);




Route::get('/Category/{id}', function($id){
    return view('Category', [
        'Basil' => $id
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
