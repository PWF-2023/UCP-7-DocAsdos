<?php

use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Matakuliah;
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

    // Matakuliah
    Route::get('/matkul', [MatkulController::class, 'index'])->name('matkul.index');
    Route::get('/matkul/create', [MatkulController::class, 'create'])->name('matkul.create');
    Route::get('/matkul/edit', [MatkulController::class, 'edit'])->name('matkul.edit');

    // User
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});

require __DIR__ . '/auth.php';
