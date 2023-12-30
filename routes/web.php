<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
<<<<<<< HEAD
use App\Http\Controllers\barangController;
use App\Http\Controllers\KasirController;



=======
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
>>>>>>> 9f33ddae932a9a9216dac2f84d28b931f97c07d1
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

<<<<<<< HEAD


//Route::get('/', function () {
//     return view('login');
//});
=======
Route::get('/', function () {
    return view('login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
>>>>>>> 9f33ddae932a9a9216dac2f84d28b931f97c07d1

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

<<<<<<< HEAD

Route::get('/nota_belanja', function () {
=======
Route::get('/nota', function () {
>>>>>>> 9f33ddae932a9a9216dac2f84d28b931f97c07d1
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

<<<<<<< HEAD
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
=======
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
>>>>>>> 9f33ddae932a9a9216dac2f84d28b931f97c07d1
