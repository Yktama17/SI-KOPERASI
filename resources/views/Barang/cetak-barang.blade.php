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
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak Data Barang</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan data barang</b></p>
        <th>NO</th>
                        <th>id barang</th>
                        <th>nama_barang</th>
                        <th>harga_barang</th>
                        <th>id_kategori_barang</th>
                        <th>id_stock</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($barang as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $row ->id_barang }}</th>
                        <th>{{ $row ->nama_barang }}</th>
                        <th>{{ $row ->harga_barang }}</th>
                        <th>{{ $row ->id_kategori_barang }}</th>
                        <th>{{ $row ->id_stock }}</th> 
                    </tr>  
                    @endforeach
                </tbody>
            </table>
              </body> 
        </table>
    </div>
</body>
</html>