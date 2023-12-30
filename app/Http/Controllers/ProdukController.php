<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::get();

        return view('produk.index',['data' => $produk]);
    }

    public function tambah()
    {
        return view('produk.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'stok_produk' => $request->stok_produk,
            'harga_jual'  => $request->harga_jual,
            'harga_beli'  => $request->harga_beli
        ];

        Produk::create($data);

        return redirect()->route('produk');
    }

    public function edit($id)
    {
        $produk = Produk::find($id)->first();

        return view('produk.edit', ['produk' => $produk]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'stok_produk' => $request->stok_produk,
            'harga_jual'  => $request->harga_jual,
            'harga_beli'  => $request->harga_beli
        ];

        Produk::find($id)->update($data);

        return redirect()->route('produk');
    }

    public function hapus($id)
    {
        Produk::find($id)->delete();

        return redirect()->route('produk');
    }

}
