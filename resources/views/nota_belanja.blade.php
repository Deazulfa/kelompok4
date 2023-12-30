<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        #total {
            margin-top: 20px;
            text-align: right;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 100%;
                box-shadow: none;
            }

            table {
                width: 100%;
            }

            #total {
                margin-top: 10px;
            }
        }
    </style>
    <title>Nota Belanja</title>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Nota Belanja</h2>

    <table>
        <thead>
        <tr>
            <th scope="col">Id Kategori</th>
            <th scope="col">Id Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Subtotal</th>
        </tr>
        </thead>
        <tbody id="itemList">
            <!-- Isi dengan data dinamis dari JavaScript -->
        </tbody>
    </table>

    <div id="total">
        <strong>Total:</strong> <span id="totalAmount">0</span>
    </div>
</div>

<script>
    // Isi dengan skrip JavaScript Anda di sini
</script>

</body>
</html>
