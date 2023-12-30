@extends('layout.main')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Kasir</h2>

        <form id="pointOfSaleForm">
            <div class="mb-3">
                <label for="categoryId" class="form-label">ID Kategori:</label>
                <select class="form-select" id="categoryId" name="categoryId" required>
                    <!-- Opsi pilihan kategori, Anda bisa mengisinya sesuai dengan kebutuhan -->
                    <option value="1">Kategori 1</option>
                    <option value="2">Kategori 2</option>
                    <!-- Tambahkan opsi kategori lainnya sesuai kebutuhan -->
                </select>
            </div>
            
            <div class="mb-3">
                <label for="productId" class="form-label">ID Barang:</label>
                <select class="form-select" id="productId" name="productId" required>
                    <!-- Opsi pilihan barang, Anda bisa mengisinya sesuai dengan kebutuhan -->
                    <option value="1">Barang 1</option>
                    <option value="2">Barang 2</option>
                    <!-- Tambahkan opsi barang lainnya sesuai kebutuhan -->
                </select>
            </div>
            
            <div class="mb-3">
                <label for="productName" class="form-label">Nama Produk:</label>
                <input type="text" class="form-control" id="productName" name="productName" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Jumlah:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <button type="button" class="btn btn-success" onclick="addItem()">Tambahkan Item</button>
        </form>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Id kategori </th>
                    <th scope="col">Id barang </th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody id="itemList">
                <!-- Daftar item akan ditampilkan di sini -->
            </tbody>
        </table>

        <div id="total" class="mt-3">
            <strong>Total:</strong> <span id="totalAmount">0</span>
        </div>

        <button type="submit"  href="/nota_belanja" class="btn btn-primary mt-3" onclick="printReceipt()">BAYAR</button>
    </div>

    <script>
        function addItem() {
            // Mendapatkan nilai dari input
            var productName = document.getElementById('productName').value;
            var categoryId = document.getElementById('categoryId').value;
            var productId = document.getElementById('productId').value;
            var price = parseFloat(document.getElementById('price').value);
            var quantity = parseFloat(document.getElementById('quantity').value);
    
            // Menghitung subtotal
            var subtotal = price * quantity;
    
            // Mendapatkan elemen tbody untuk menambahkan item
            var itemList = document.getElementById('itemList');
    
            // Membuat baris baru untuk item
            var row = itemList.insertRow();
    
            // Menambahkan sel untuk ID kategori, ID barang, harga, jumlah, dan subtotal
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);
    
            // Mengatur nilai sel sesuai dengan input
            cell1.innerHTML = categoryId;
            cell2.innerHTML = productId;
            cell3.innerHTML = price;
            cell4.innerHTML = quantity;
            cell5.innerHTML = subtotal;
    
            // Mengosongkan input setelah menambahkan item
            document.getElementById('productName').value = '';
            document.getElementById('categoryId').value = '';
            document.getElementById('productId').value = '';
            document.getElementById('price').value = '';
            document.getElementById('quantity').value = '';
    
            // Menghitung dan menampilkan total
            calculateTotal();
        }
    
        function calculateTotal() {
            var totalAmount = 0;
            var itemRows = document.getElementById('itemList').getElementsByTagName('tr');
    
            for (var i = 0; i < itemRows.length; i++) {
                var cells = itemRows[i].getElementsByTagName('td');
                var subtotal = parseFloat(cells[4].innerHTML);
                totalAmount += subtotal;
            }
    
            // Menampilkan total
            document.getElementById('totalAmount').innerHTML = totalAmount;
        }
    
        function printReceipt() {
            // (Sama seperti sebelumnya)
        }
    </script>

@endsection
