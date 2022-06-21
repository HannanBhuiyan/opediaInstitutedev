<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
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




// =================== frontend controller ===========================

Route::get('/', [FrontendHomeController::class, 'FrontendIndex'])->name('frontend.index');
