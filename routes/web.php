<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');

Route::view('/contact','contact')->name('contact');

Route::view('/blog','blog')->name('blog');

Route::view('/nosotros','about')->name('about');

