@extends('layouts.app')
@section('title','Form Barang')

@section('content')
<form action="{{ isset($pengadaan_aset) ? route('pengadaanaset.tambah.update', $pengadaanaset->id) : route('pengadaanaset.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($pengadaan_aset) ? 'Form Edit PengadaanAset' : 'Form Tambah Pengadaan Aset' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_barang">Id Barang</label>
                    <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{ isset($barang) ? $barang->id_barang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ isset($barang) ? $barang->nama_barang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="harga_barang">Harga Barang</label>
                    <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="{{ isset($barang) ? $barang->harga_barang : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="id_kategori">Id_Kategori</label>
                    <input type="text" class="form-control" id="id_kategori" name="id_kategori" value="{{ isset($barang) ? $barang->id_kategori : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="id_stock">Id_Stock</label>
                    <input type="text" class="form-control" id="id_stock" name="id_stock" value="{{ isset($barang) ? $barang->id_stock : '' }}">
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