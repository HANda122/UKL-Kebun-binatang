<?php

use App\Http\Controllers\PengunjungController;
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

//Route::get('/pengunjungs', [PengunjungController::class, 'index'])->name('pengunjung.index');
//Route::get('/pengunjungs/create', [PengunjungController::class, 'create'])->name('pengunjung.create');
//Route::post('/pengunjungs', [PengunjungController::class, 'store'])->name('pengunjung.store');
//Route::get('/pengunjungs/{id}/edit', [PengunjungController::class, 'edit'])->name('pengunjung.edit');
//Route::put('/pengunjungs/{id}', [PengunjungController::class, 'update'])->name('pengunjung.update');
//Route::delete('/pengunjungs/{id}', [PengunjungController::class, 'destroy'])->name('pengunjung.destroy');
//Route::get('/pengunjungs/search', [PengunjungController::class, 'search']);

Route::resource('pengunjungs', PengunjungController::class)->middleware('auth');

require __DIR__.'/auth.php';
