<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Frontend\FrontendHomeController;



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// profile
Route::get('Admin/profile/index', [ProfileController::class, 'AdminProfileIndex'])->name('admin.profile.index');
Route::post('Admin/profile/image/update', [ProfileController::class, 'AdminProfileImageUpdate'])->name('profile.image.update');
Route::post('Admin/profile/password/update', [ProfileController::class, 'AdminProfilePasswordUpdate'])->name('profiles.password.update');
Route::post('Admin/profile/update', [ProfileController::class, 'AdminProfileUpdate'])->name('profiles.update');


// category
Route::resource('category', CategoryController::class);
Route::get('/category/Delete/{id}', [CategoryController::class, 'categoryDelete']);


// contact
Route::get('contact', [ContactController::class, 'ContactIndex'])->name('contact.index');
Route::get('contact/{id}', [ContactController::class, 'singleContect'])->name('singleContect');
Route::get('/contact/Delete/{id}', [ContactController::class, 'ContactDelete']);


// course
Route::resource('course', CourseController::class);



// =================== frontend controller ===========================
Route::get('/', [FrontendHomeController::class, 'FrontendIndex'])->name('frontend.index');
