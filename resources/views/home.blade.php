@extends('layout.main');

@section('content')
<main>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D9D9D9;
            margin: 0;
            padding: 0;
            height: 200px;
        }

        .btn-primary{
            background-color: #404040 !important; 
            border: none; 
            border-radius: 20px; 
            width: 80px;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover{
            background-color: #6e6e6e !important;
        }
    </style>
<body>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        PENJUALAN HARI 
                        <a href="{{ route('today-print') }}" class="btn btn-primary"
                                style=" border:none; float:right" target="__blank">Cetak</a>
                    </div>
                    <div class="card-body">
                        <table class="table mt-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Pesanan</th>
                                    <th scope="col">Subtotal/Qty</th>
                                    <th scope="col">Total Pesanan</th>
                                </tr>
                            </thead>
                            <tbody id="itemListHariIni">
                                @foreach ($kasirHariIni as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_pesanan }}</td>
                                        <td>
                                            @forelse ($detailPesananHariIni[$item->id] as $dp)
                                                <ul>
                                                    <li>{{ $dp->product->nama_produk }} / {{ $dp->jumlah }} / Rp.{{ $dp->subtotal }}</li>
                                                </ul>
                                            @empty
                                                <p>No details available.</p>
                                            @endforelse
                                        </td>
                                        <td>
                                            Rp.{{ $item->harga }}
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area me-1"></i>
                        PENJUALAN BULAN INI
                        <a href="{{ route('cr-month-print') }}" class="btn btn-primary"
                                style=" border:none; float:right" target="__blank">Cetak</a>
                    </div>
                    <div class="card-body">
                        <table class="table mt-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Pesanan</th>
                                    <th scope="col">Subtotal/Qty</th>
                                    <th scope="col">Total Pesanan</th>
                                </tr>
                            </thead>
                            <tbody id="itemListBulanIni">
                                @foreach ($kasirBulanIni as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_pesanan }}</td>
                                        <td>
                                            @forelse ($detailPesananBulanIni[$item->id] as $dp)
                                                <ul>
                                                    <li>{{ $dp->product->nama_produk }} / {{ $dp->jumlah }} / Rp.{{ $dp->subtotal }}</li>
                                                </ul>
                                            @empty
                                                <p>No details available.</p>
                                            @endforelse
                                        </td>
                                        <td>
                                            Rp.{{ $item->harga }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</main>

@endsection