@extends('layout.main')

@section('content')
<style>
    .btn-primary{
        background-color: #404040 !important; 
        border: none; 
        border-radius: 10px; 
        width: 43px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #6e6e6e !important;
    }
    
    .btn-dark{
        background-color: #404040 !important; 
        border: none; 
        border-radius: 20px; 
        width: 180px;
        letter-spacing: 1px;
        float:right;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #6e6e6e !important;
    }

    .btn-warning{
        background-color: #33714f !important; 
        border: none; 
        border-radius: 10px; 
        width: 80px;
        letter-spacing: 1px;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #4c966c !important;
    }

    .btn-danger{
        background-color: #852828 !important; 
        border: none; 
        border-radius: 10px; 
        width: 90px;
        letter-spacing: 1px;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #e96c6c !important;
    }
</style>
    <div class="container mt-5">
        <h1 style="margin-bottom: 50px">Produk</h1>

        <a href="{{ route('product.create') }}" class="btn btn-dark">+ Tambah Produk</a>
        <form method="GET" action="" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"
            style="margin-top: 50px; float:right">
            <div class="input-group" style="left:5px">
                <input class="form-control" name="keyword" value="{{ $keyword }}" type="text" placeholder="Cari..." aria-label="Cari..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="submit">
                    <i class="fas fa-search" style="width:20px; left:30px"></i>
                </button>
            </div>
        </form>
        <br/>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">KATEGORI BARANG</th>
                    <th scope="col">PRODUK</th>
                    <th scope="col">STOK</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">HARGA BELI</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody id="itemList">
                @foreach ($product as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->category->nama_kategori }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->harga_jual }}</td>
                        <td>{{ $item->harga_beli }}</td>
                        <td class="d-flex justify-content-beetwen">
                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-warning me-2 text-light">
                                Edit
                            </a>

                            <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-light"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    {{-- <script>
    function addItem() {
        var kategoriName = document.getElementById('kategoriName').value;
        var itemList = document.getElementById('itemList');
        var row = itemList.insertRow();
        
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);}
</script> --}}
@endsection
