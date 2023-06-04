@extends('layouts.app')
@section('title','Data Keuangan')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Keuangan</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('keuangan.tambah') }}" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>id_keuangan</th>
                        <th>tanggal_keuangan</th>
                        <th>nominal_pemasukan</th>
                        <th>nominal_pengeluaran</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($keuangan as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <th>{{ $row ->id_keuangan }}</th>
                        <th>{{ $row ->tanggal_keuangan }}</th>
                        <th>{{ $row ->nominal_pemasukan }}</th>
                        <th>{{ $row ->nominal_pengeluaran }}</th>
                    <td>
                        <a href="{{ route('keuangan.edit', $row->id) }}" class="btn btn-warning"> EDIT </a>
                        <a href="{{ route('keuangan.hapus',$row->id) }}" class="btn btn-danger"> HAPUS</a>
                    </td>  
                    </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection