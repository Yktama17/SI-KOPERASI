@extends('layouts.app')
@section('title','Form Keuangan')

@section('content')
<form action="{{ isset($keuangan) ? route('keuangan.tambah.update', $keuangan->id) : route('keuangan.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($keuangan) ? 'Form Edit keuangan' : 'Form Tambah keuangan' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_keuangan">Id keuangan</label>
                    <input type="text" class="form-control" id="id_keuangan" name="id_keuangan" value="{{ isset($keuangan) ? $keuangan->id_keuangan : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="tanggal_keuangan">Tanggal Keuangan</label>
                    <input type="date" class="form-control" id="tanggal_keuangan" name="tanggal_keuangan" value="{{ isset($keuangan) ? $keuangan->tanggal_keuangan : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nominal_pemasukan">Nominal Pemasukan</label>
                    <input type="text" class="form-control" id="nominal_pemasukan" name="nominal_pemasukan" value="{{ isset($keuangan) ? $keuangan->nominal_pemasukan : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nominal_pengeluaran">Nominal Pengeluaran</label>
                    <input type="text" class="form-control" id="nominal_pengeluaran" name="nominal_pengeluaran" value="{{ isset($keuangan) ? $keuangan->nominal_pengeluaran : '' }}">
                    </div>
                </div>
            </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
            </div>
        </div>
    </div>
</form>

@endsection