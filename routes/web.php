<?php

use App\Http\Controllers\ClientController;
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
});

Route::get('/', function () {
    return view('welcome');
})->middleware('preventAdminHome')->name('home');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', function () {
        return view('pages.dashboard');
    });
    // Tambahkan route khusus admin lainnya
});



Auth::routes();

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/form', [ClientController::class, 'index'])->name('form');
    Route::post('/form', [ClientController::class, 'store'])->name('form.store');
});
