<?php

use App\Http\Controllers\Controller;
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

Route::get('/index', [TaskController::class, 'index'])->name('index');
Route::get('/add-task', [TaskController::class, 'addTask'])->name('addTask');
Route::post('/task/create', [TaskController::class, 'addNewTask'])->name('addNewTask');
Route::get('/edit-task', [TaskController::class, 'editTask'])->name('editTask');
