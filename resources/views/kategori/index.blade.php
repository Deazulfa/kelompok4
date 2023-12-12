@extends('layout.main')

@section('content')

<div class="container mt-5">
<h1 style="margin-bottom: 50px">List Kategori Barang</h1>

<a href="{{ route('kategori.tambah') }}" class="btn btn-primary" style="background-color:gray; border:none; float:right">Tambah Kategori</a>
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" style="margin-top: 50px; float:right" >
    <div class="input-group" style="">
        <input class="form-control" type="text" placeholder="Cari..." aria-label="Cari..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
    </div>
</form>
<table class="table mt-4">
    <thead>
        <tr>
            <th>NO</th>
            <th>KODE KATEGORI</th>
            <th>NAMA KATEGORI</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        @php($no = 1)
        @foreach ($data as $row)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->kode_kategori }}</td>
                <td>{{ $row->nama_kategori }}</td>
                <td>
                    <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('kategori.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection