<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\AdminController;
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

Route::middleware('auth', 'verified', 'role::user')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware(['auth', 'verified', 'role::user']);
// Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware(['auth', 'verified', 'role::user']);
// Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware(['auth', 'verified', 'role::user']);

require __DIR__.'/auth.php';

Route::get('/home', function () {
    return view('frontend.home');
})->middleware(['auth', 'verified']);

Route::get('/study', [StudyController::class, 'kajian'])->middleware(['auth', 'verified'])->name('kajian');
Route::get('/study/{id}', [StudyController::class, 'showkajian'])->middleware(['auth', 'verified'])->name('showkajian');

Route::get('/content', function () {
    return view('frontend.content');
})->middleware(['auth', 'verified']);

Route::get('/contact', function () {
    return view('frontend.contact');
})->middleware(['auth', 'verified']);

// ROUTE ADMIN

// Routes for admin
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dash', function () {
        return view('admin.dash');
    });

    Route::get('/form', [AdminController::class, 'create'])->name('create');
    Route::post('/form', [AdminController::class, 'store'])->name('store');

    // melihat tabel kajian
    Route::get('/table', [AdminController::class, 'table'])->name('table');

    // masuk ke halaman edit sesuai id
    Route::get('/table/{id}', [AdminController::class, 'edit'])->name('edit');

    // mulai edit dan update sesuai id
    Route::get('/edit/{id}', [AdminController::class, 'edit_id'])->name('edit_id');
    Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');
});
// Route::get('/form', function () {
//     return view('admin.form');
// });
