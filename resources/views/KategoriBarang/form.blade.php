@extends('layouts.app')
@section('title','Form KategoriBarang')

@section('content')
<form action="{{ isset($kategoribarang) ? route('kategoribarang.tambah.update', $kategoribarang->id) : route('kategoribarang.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($kategoribarang) ? 'Form Edit kategoribarang' : 'Form Tambah kategoribarang' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_kategori_barang">Id Kategori Barang</label>
                    <input type="text" class="form-control" id="id_kategori_barang" name="id_kategori_barang" value="{{ isset($kategoribarang) ? $kategoribarang->id_kategori_barang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ isset($kategoribarang) ? $kategoribarang->nama_kategori : '' }}">
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