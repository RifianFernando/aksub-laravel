<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', [ProductController::class, 'index'])->name('index');
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('/product/create', [ProductController::class, 'addNewProduct'])->name('addNewProduct');
Route::get('/edit-product', [ProductController::class, 'editProduct'])->name('editProduct');
