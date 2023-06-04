@extends('layouts.app')
@section('title','Data Barang')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('barang.tambah') }}" class="btn btn-primary mb-2">Tambah</a>
        <a href="{{ route('barang.downloadpdf') }}" class="btn btn-success mb-2">Report</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                    <td>
                        <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning"> EDIT </a>
                        <a href="{{ route('barang.hapus',$row->id) }}" class="btn btn-danger"> HAPUS</a>
                    </td>  
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection