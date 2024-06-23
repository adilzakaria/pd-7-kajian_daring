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

// ROUTE USER

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('frontend.home');
})->middleware(['auth', 'verified']);

Route::get('/study', function () {
    return view('frontend.study');
})->middleware(['auth', 'verified']);

Route::get('/content', function () {
    return view('frontend.content');
})->middleware(['auth', 'verified']);

Route::get('/contact', function () {
    return view('frontend.contact');
})->middleware(['auth', 'verified']);

// ROUTE ADMIN

Route::get('/dash', function () {
    return view('admin.dash');
});
Route::get('/form', function () {
    return view('admin.form');
});
