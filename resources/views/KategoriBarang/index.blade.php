@extends('layouts.app')
@section('title','Data Kategori Barang')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori Barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('kategoribarang.tambah') }}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <tr>
                            <th>NO</th>
                            <th>id_kategori_barang</th>
                            <th>nama_kategori</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($no = 1)
                        @foreach ($kategoribarang as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <th>{{ $row ->id_kategori_barang }}</th>
                            <th>{{ $row ->nama_kategori }}</th>         
                        <td>
                            <a href="{{ route('kategoribarang.edit', $row->id) }}" class="btn btn-warning"> EDIT </a>
                            <a href="{{ route('kategoribarang.hapus',$row->id) }}" class="btn btn-danger"> HAPUS</a>
                        </td>  
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection