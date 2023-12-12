<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;

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

Route::get('/nota', function () {
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

Route::get('/input', function () {
    return view('input_data', [
        'title' => 'Input Data'
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

Route::controller(KategoriController::class)->prefix('kategori')->group(function() {
    Route::get('','index')->name('kategori');
    Route::get('tambah','tambah')->name('kategori.tambah');
    Route::post('tambah','simpan')->name('kategori.tambah.simpan');
    Route::get('edit/{id}','edit')->name('kategori.edit');
    Route::put('edit/{id}','update')->name('kategori.tambah.update');
    Route::get('hapus/{id}','hapus')->name('kategori.hapus');
});

Route::controller(ProdukController::class)->prefix('produk')->group(function() {
    Route::get('','index')->name('produk');
    Route::get('tambah','tambah')->name('produk.tambah');
    Route::post('tambah','simpan')->name('produk.tambah.simpan');
    Route::get('edit/{id}','edit')->name('produk.edit');
    Route::put('edit/{id}','update')->name('produk.tambah.update');
    Route::get('hapus/{id}','hapus')->name('produk.hapus');
});