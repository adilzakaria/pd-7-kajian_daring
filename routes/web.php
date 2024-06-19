<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/home', function () {
//     return view('frontend.home');
// })->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('frontend.home');
})->middleware(['auth', 'verified']);

Route::get('/about', function () {
    return view('frontend.about');
})->middleware(['auth', 'verified']);

Route::get('/class', function () {
    return view('frontend.class');
})->middleware(['auth', 'verified']);

Route::get('/teachers', function () {
    return view('frontend.teachers');
})->middleware(['auth', 'verified']);

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->middleware(['auth', 'verified']);

Route::get('/pages', function () {
    return view('frontend.pages');
})->middleware(['auth', 'verified']);

Route::get('/blog', function () {
    return view('frontend.blog');
})->middleware(['auth', 'verified']);

Route::get('/single', function () {
    return view('frontend.single');
})->middleware(['auth', 'verified']);

Route::get('/contact', function () {
    return view('frontend.contact');
})->middleware(['auth', 'verified']);
