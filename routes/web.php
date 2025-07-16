<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//blog.test => welcome (devuelve la vista welcome.blade.php)
Route::view('/','welcome');

//blog.test/contacto = contact (devuelve la vista contact.blade.php)
Route::view('/contacto','contact');
//blog.test/blog => blog (devuelve la vista blog.blade.php)
Route::view('/blog','blog');
//blog.test/blog/nosotros => about (devuelve la vista about.blade.php)
Route::view('/nosotros','about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
