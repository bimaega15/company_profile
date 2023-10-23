<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesanUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Modules\Website\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'index']);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/pesanUser', [PesanUserController::class, 'index'])->name('pesanUser.index');
    Route::get('/pesanUser/{id}', [PesanUserController::class, 'show'])->name('pesanUser.show');
    Route::delete('/pesanUser/{id}', [PesanUserController::class, 'destroy'])->name('pesanUser.destroy');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
require __DIR__ . '/auth.php';
