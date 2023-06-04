@extends('layouts.app')
@section('title','Data Gudang')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Gudang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('gudang.tambah') }}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>id_gudang</th>
                        <th>nama_gudang</th>
                        <th>alamat_gudang</th>
                        <th>kapasitas</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($gudang as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $row ->id_gudang }}</th>
                        <th>{{ $row ->nama_gudang }}</th>
                        <th>{{ $row ->alamat_gudang }}</th>
                        <th>{{ $row ->kapasitas }}</th>
                    <td>
                        <a href="{{ route('gudang.edit', $row->id) }}" class="btn btn-warning"> EDIT </a>
                        <a href="{{ route('gudang.hapus',$row->id) }}" class="btn btn-danger"> HAPUS</a>
                    </td>  
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection