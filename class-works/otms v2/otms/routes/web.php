<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/training-category', [HomeController::class,'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class,'allTraining'])->name('training.all');
Route::get('/training-detail', [HomeController::class,'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');

Route::get('/login-registration', [HomeController::class,'loginRegistration'])->name('login-registration');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'] )->name('dashboard');

    Route::get('/teachers',[TeacherController::class,'index'])->name('teachers');
    Route::post('/add-teacher',[TeacherController::class,'create'])->name('teacher.add');
    Route::get('/teacher/manage',[TeacherController::class,'manage'])->name('teacher.manage');
});



