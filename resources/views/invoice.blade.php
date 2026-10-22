<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Invoice Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
        }

        h1 {
            text-align: center;
        }

        .info {
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #eeeeee;
        }

        .total {
            text-align: right;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>INVOICE PRODUK</h1>

    <div class="info">
        <p>Nomor Invoice: INV-001</p>
        <p>Tanggal: {{ date('d-m-Y') }}</p>
        <p>Nama Pelanggan: Pelanggan Umum</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produk Contoh</td>
                <td>2</td>
                <td>Rp10.000</td>
                <td>Rp20.000</td>
            </tr>
        </tbody>
    </table>

    <p class="total">Total: Rp20.000</p>
</body>
</html>
