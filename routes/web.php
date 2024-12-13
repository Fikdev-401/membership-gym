<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
})->middleware('preventAdminHome')->name('home');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
    // Tambahkan route khusus admin lainnya
});



Auth::routes();

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/form', [ClientController::class, 'index'])->name('form');
    Route::post('/form', [ClientController::class, 'store'])->name('form.store');
    Route::patch('/client/{id}/update-status', [ClientController::class, 'updateStatus'])->name('update.status');
    Route::delete('/client/{id}/delete', [ClientController::class, 'deleteUser'])->name('delete.user');

});
