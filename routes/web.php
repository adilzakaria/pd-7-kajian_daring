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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/class', function () {
    return view('frontend.class');
});
Route::get('/teachers', function () {
    return view('frontend.teachers');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/pages', function () {
    return view('frontend.pages');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/single', function () {
    return view('frontend.single');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});