<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
        }
    </style>
    <title>Cetak Data Barang</title>
</head>

<body>
    <div>
        <p align="center"><b>Laporan data barang</b></p>
        <table class="static" border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>id barang</th>
                    <th>nama_barang</th>
                    <th>harga_barang</th>
                    <th>id_kategori_barang</th>
                    <th>id_stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->id_barang }}</td>
                        <td>{{ $row->nama_barang }}</td>
                        <td>{{ $row->harga_barang }}</td>
                        <td>{{ $row->id_kategori_barang }}</td>
                        <td>{{ $row->id_stock }}</td>
                        <td>...</td> <!-- Kolom aksi -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
