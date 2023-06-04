@extends('layouts.app')
@section('title','Data Pengadaan Aset')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengadaan Aset</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('pengadaanaset.tambah') }}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>id_pengadaan_aset</th>
                        <th>id_aset</th>
                        <th>tanggal_pengadaan</th>
                        <th>nilai_aset</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($pengadaanaset as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $row ->id_pengadaan_aset }}</th>
                        <th>{{ $row ->id_aset }}</th>
                        <th>{{ $row ->tanggal_pengadaan }}</th>
                        <th>{{ $row ->nilai_aset }}</th>
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