<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/category', [CategoryController::class,'index'])->name('category.home');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
Route::get('/category/manage', [CategoryController::class,'manage'])->name('category.manage');
Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');

Route::resource('/blog',BlogController::class);


