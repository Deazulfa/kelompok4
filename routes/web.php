<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\KasirController;



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
Route::get('kasir', [KasirController::class, 'index'])->name('index-kasir');
Route::get('kasir/get-produk-id/{id?}', [KasirController::class, 'getProdukId']);
Route::post('kasir', [KasirController::class, 'pesanan'])->name('index-pesanan');
Route::get('kasir/nota/{id?}', [KasirController::class, 'nota'])->name('nota');



//Route::get('/', function () {
//     return view('login');
//});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/kasir', function () {
    return view('kasir', [
        'title' => 'Kasir'
    ]);
});


Route::get('/nota_belanja', function () {
    return view('nota_belanja', [
        'title' => 'Nota'
    ]);
});

Route::get('/form', function () {
    return view('form', [
        'title' => 'Form'
    ]);
});

Route::get('/form_kategori', function () {
    return view('form_kategori', [
        'title' => 'Form_kategori'
    ]);
});

Route::get('/form_produk', function () {
    return view('form_produk', [
        'title' => 'Form_produk'

    ]);
});

Route::get('/penjualan', function () {
    return view('penjualan', [
        'title' => 'Penjualan'
    ]);
});

Route::get('/kategori', function () {
    return view('kategori', [
        'title' => 'kategori'
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        'title' => 'produk'
    ]);
});

Route::get('/restock', function () {
    return view('restock', [
        'title' => 'Restock'
    ]);
});

Route::get('/form_restock', function () {
    return view('form_restock', [
        'title' => 'Form Restock'
    ]);
});

Route::get('/alarm_restock', function () {
    return view('alarm_restock', [
        'title' => 'Alarm Restock'
    ]);
});

Route::post('/simpan_kategori', 'KategoriController@simpan');
Route::get('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');

use App\Http\Controllers\userController;

Route::get('/user', [userController::class, 'index'])->name('user.index');
Route::get('/user/create', [userController::class, 'create'])->name('user.create');
Route::post('/user/store', [userController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [userController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [userController::class, 'update'])->name('user.update');
Route::delete('/user/destroy/{id}', [userController::class, 'destroy'])->name('user.destroy');
//