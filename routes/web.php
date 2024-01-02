<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);

Route::get('kasir', [KasirController::class, 'index'])->name('index-kasir');
Route::get('kasir/get-produk-id/{id?}', [KasirController::class, 'getProdukId']);
Route::post('kasir', [KasirController::class, 'pesanan'])->name('index-pesanan');
Route::get('kasir/nota/{id?}', [KasirController::class, 'nota'])->name('nota');
Route::get('notifications', [HomeController::class, 'getNotification'])->name('notif');

Route::get('report', [ReportController::class, 'index'])->name('report');
Route::get('all-report', [ReportController::class, 'printReport'])->name('print-all-report');
Route::get('today-print', [HomeController::class, 'todayPrint'])->name('today-print');
Route::get('cr-month-print', [HomeController::class, 'currentMonth'])->name('cr-month-print');
