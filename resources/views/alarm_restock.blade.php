@extends('layout.main')

@section('content')
<main>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alarm Restock Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 900;
        }

        #close-btn {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>

<body>

<!-- Simulasi jumlah barang kurang dari 10 -->
<script>
    var jumlahBarang = 5; // Ganti dengan jumlah barang aktual

    // Fungsi untuk menampilkan pop-up jika jumlah barang kurang dari 10
    function checkStock() {
        if (jumlahBarang < 10) {
            showPopup();
        }
    }

    function showPopup() {
        document.getElementById('popup').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }

    // Panggil fungsi checkStock saat halaman dimuat
    window.onload = checkStock;
</script>

<!-- Pop-up -->
<div id="overlay"></div>
<div id="popup">
    <span id="close-btn" onclick="closePopup()">X</span>
    <h2>Alarm Restock Barang</h2>
    <p>Waktu untuk merestock barang!</p>
</div>

</body>
@endsection
