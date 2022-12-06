<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\CourseController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/training-category', [HomeController::class,'categoryTraining'])->name('training.category');
Route::get('/all-training', [HomeController::class,'allTraining'])->name('training.all');
Route::get('/training-detail', [HomeController::class,'trainingDetail'])->name('training.detail');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class,'loginRegistration'])->name('login-registration');

Route::get('/teacher/login',[TeacherAuthController::class,'index'])->name('teachers.login');
Route::post('/teacher/login',[TeacherAuthController::class,'login'])->name('teachers.login');
Route::get('/teacher/dashboard',[TeacherAuthController::class,'dashboard'])->name('teachers.dashboard');
Route::post('/teacher/logout',[TeacherAuthController::class,'logout'])->name('teacher.logout');

Route::get('/course/add',[CourseController::class,'index'])->name('course.add');
Route::post('/course/create',[CourseController::class,'create'])->name('course.create');
Route::post('/course/manage',[CourseController::class,'manage'])->name('course.manage');
Route::post('/course/edit/{id}',[CourseController::class,'edit'])->name('course.edit');
Route::post('/course/update/{id}',[CourseController::class,'update'])->name('course.update');
Route::post('/course/delete/{id}',[CourseController::class,'delete'])->name('course.delete');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'] )->name('dashboard');

    Route::get('/teachers',[TeacherController::class,'index'])->name('teachers');
    Route::post('/add-teacher',[TeacherController::class,'create'])->name('teacher.add');
    Route::get('/teacher/manage',[TeacherController::class,'manage'])->name('teacher.manage');
    
    Route::get('/teacher/edit/{id}',[TeacherController::class,'editTeacher'])->name('teacher.edit');
    Route::post('/teacher/update/{id}',[TeacherController::class,'updateTeacher'])->name('teacher.update');
    Route::post('/teacher/delete/{id}',[TeacherController::class,'deleteTeacher'])->name('teacher.delete');



});



