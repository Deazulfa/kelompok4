@extends('layout.main')

@section('content')

<div class="container mt-5">
<h1 style="margin-bottom: 50px">List Barang</h1>

<a href="{{ route('produk.tambah') }}" class="btn btn-primary" style="background-color:gray; border:none; float:right">Tambah Kategori</a>
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style="margin-top: 50px; float:right" >
    <div class="input-group" style="">
        <input class="form-control" type="text" placeholder="Cari..." aria-label="Cari..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
    </div>
</form>
<table class="table mt-4">
    <thead>
        <tr>
            <th>KODE BARANG</th>
            <th>NAMA PRODUK/KATEGORI</th>
            <th>STOK</th>
            <th>HARGA JUAL</th>
            <th>HARGA BELI</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        @php($no = 1)
        @foreach ($data as $row)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_produk }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->stok_produk }}</td>
                <td>{{ $row->harga_jual }}</td>
                <td>{{ $row->harga_beli }}</td>
                <td>
                    <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('produk.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection