@section('content')
<main>
    <div class="container-fluid px-4">
    <div class="container mt-5">
    <title>Input Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
<body>
    <form action="{{ isset($produk) ? route('produk.tambah.update',$produk->id): route('produk.tambah.simpan') }}" method="post">
        @csrf
        @method('put')
        <label for="kode_produk">Kode Kategori:</label>
        <input type="text" id="kode_produk" name="kode_produk" placeholder="{{ $produk->kode_produk }}">

        <label for="nama_produk">Nama Kategori:</label>
        <input type="text" id="nama_produk" name="nama_produk" placeholder="{{ $produk->nama_produk}}">

        <label for="stok_produk">Stok:</label>
        <input type="number" id="stok_produk" name="stok_produk" placeholder="{{ $produk->stok_produk}}">

        <label for="harga_jual">Harga Jual:</label>
        <input type="number" id="harga_jual" name="harga_jual" placeholder="{{ $produk->harga_jual}}">

        <label for="harga_beli">Harga Beli:</label>
        <input type="number" id="harga_beli" name="harga_beli" placeholder="{{ $produk->harga_beli}}">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</div>
</div>
</main>


