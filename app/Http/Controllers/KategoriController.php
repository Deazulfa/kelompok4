<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::get();

        return view('kategori.index',['data' => $kategori]);
    }

    public function tambah()
    {
        return view('kategori.form');
    }

    public function simpan(Request $request)
    {
        $data = [
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori
        ];

        Kategori::create($data);

        return redirect()->route('kategori');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id)->first();

        return view('kategori.edit', ['kategori' => $kategori]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'kode_kategori' => $request->kode_kategori,
            'nama_kategori' => $request->nama_kategori
        ];

        Kategori::find($id)->update($data);

        return redirect()->route('kategori');
    }

    public function hapus($id)
    {
        Kategori::find($id)->delete();

        return redirect()->route('kategori');
    }

}