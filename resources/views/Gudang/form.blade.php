@extends('layouts.app')
@section('title','Form Data Gudang')

@section('content')
<form action="{{ isset($gudang) ? route('gudang.tambah.update', $gudang->id) : route('gudang.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($gudang) ? 'Form Edit gudang' : 'Form Tambah gudang' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_gudang">Id_gudang</label>
                    <input type="text" class="form-control" id="id_gudang" name="id_gudang" value="{{ isset($gudang) ? $gudang->id_gudang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nama_gudang">nama_gudang</label>
                    <input type="text" class="form-control" id="nama_gudang" name="nama_gudang" value="{{ isset($gudang) ? $gudang->nama_gudang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="id_barang">alamat_gudang</label>
                    <input type="text" class="form-control" id="alamat_gudang" name="alamat_gudang" value="{{ isset($gudang) ? $gudang->alamat_gudang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="kapasitas">kapasitas</label>
                    <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{ isset($gudang) ? $gudang->kapasitas : '' }}">
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