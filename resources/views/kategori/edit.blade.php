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
    <form action="{{ isset($kategori) ? route('kategori.tambah.update',$kategori->id): route('kategori.tambah.simpan') }}" method="post">
        @csrf
        @method('put')
        <label for="kode_kategori">Kode Kategori:</label>
        <input type="text" id="kode_kategori" name="kode_kategori" placeholder="{{ $kategori->kode_kategori }}">

        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori" placeholder="{{ $kategori->nama_kategori}}">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</div>
</div>
</main>


