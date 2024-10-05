<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
    return view('admin.index');
});

Route::resource('category', CategoryController::class);

Route::resource('product', ProductController::class);

Route::get('attributes', function () {
    return view('admin.attributes.index');
})->name('attributes');



Route::get('order', function () {
    return view('admin.order.index');
})->name('order');
Route::get('user', function () {
    return view('admin.user.index');
})->name('user');

Route::get('comment', function () {
    return view('admin.comment.index');
})->name('comment');