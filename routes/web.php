<?php

use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MyProfileController;
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

Route::get('/', [WebsiteController::class, 'index'])->middleware('track-visit');

Route::get('/forgotPassword', [AutentikasiController::class, 'forgotPassword'])->name('forgotPassword.index');
Route::get('/forgotPassword/checkTemplate', [AutentikasiController::class, 'checkTemplate'])->name('forgotPassword.checkTemplate');
Route::post('/forgotPassword/storeForgotPassword', [AutentikasiController::class, 'storeForgotPassword'])->name('forgotPassword.storeForgotPassword');
Route::get('/forgotPassword/verifyResetPassword', [AutentikasiController::class, 'verifyResetPassword'])->name('forgotPassword.verifyResetPassword');
Route::get('/forgotPassword/resetPassword', [AutentikasiController::class, 'resetPassword'])->name('forgotPassword.resetPassword');
Route::post('/forgotPassword/storeResetPassword', [AutentikasiController::class, 'storeResetPassword'])->name('forgotPassword.storeResetPassword');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pesanUser', [PesanUserController::class, 'index'])->name('pesanUser.index');
    Route::get('/pesanUser/{id}', [PesanUserController::class, 'show'])->name('pesanUser.show');
    Route::delete('/pesanUser/{id}', [PesanUserController::class, 'destroy'])->name('pesanUser.destroy');

    Route::get('/myProfile', [MyProfileController::class, 'index'])->name('myProfile.index');
    Route::get('/myProfile/{id}/edit', [MyProfileController::class, 'edit'])->name('myProfile.edit');
    Route::put('/myProfile/{id}/update', [MyProfileController::class, 'update'])->name('myProfile.update');
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
