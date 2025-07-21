<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::view('/','welcome')->name('home');

Route::view('/contact','contact')->name('contact');

Route::get('blog', PostController::class)->name('blog');

Route::view('/nosotros','about')->name('about');

