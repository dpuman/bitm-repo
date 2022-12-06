<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [MyController::class,'index'])->name('home');
Route::get('/product/detail/{id}', [MyController::class,'detail'])->name('product.detail');

Route::get('/product/add', [ProductController::class,'index'])->name('product.add');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/manage', [ProductController::class,'manage'])->name('product.manage');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
Route::get('/product/delete/{id}', [ProductController::class,'delete'])->name('product.delete');

