@extends('layouts.app')
@section('title','Form KategoriAset')

@section('content')
<form action="{{ isset($kategoriaset) ? route('kategoriaset.tambah.update', $kategoriaset->id) : route('kategoriaset.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($kategoriaset) ? 'Form Edit KategoriAset' : 'Form Tambah KategoriAset' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_kategori_aset">Id Kategori Asett</label>
                    <input type="text" class="form-control" id="id_kategori_aset" name="id_kategori_aset" value="{{ isset($kategoriaset) ? $kategoriaset->id_kategori_aset : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ isset($kategoriaset) ? $kategoriaset->nama_kategori : '' }}">
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