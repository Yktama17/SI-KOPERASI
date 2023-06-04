@extends('layouts.app')
@section('title','Data Pengiriman')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengiriman</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('pengiriman.tambah') }}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>id_pengiriman</th>
                        <th>id_gudang</th>
                        <th>id_barang</th>
                        <th>rute</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($pengiriman as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $row ->id_pengiriman }}</th>
                        <th>{{ $row ->id_gudang }}</th>
                        <th>{{ $row ->id_barang }}</th>
                        <th>{{ $row ->rute }}</th>
                    <td>
                        <a href="{{ route('pengiriman.edit', $row->id) }}" class="btn btn-warning"> EDIT </a>
                        <a href="{{ route('pengiriman.hapus',$row->id) }}" class="btn btn-danger"> HAPUS</a>
                    </td>  
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection