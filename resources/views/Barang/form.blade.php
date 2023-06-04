@extends('layouts.app')
@section('title','Form Barang')

@section('content')
<form action="{{ isset($barang) ? route('barang.tambah.update', $barang->id) : route('barang.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($barang) ? 'Form Edit Barang' : 'Form Tambah Barang' }}</h6>
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
                        <label for="id_kategori_barang">Kategori Barang</label>
                        <select name="id_kategori_barang" id="id_kategori_barang" class="form-control">
                          <option value="" selected disabled hidden>-- Pilih --</option>
                          @foreach ($kategoribarang as $item)
                              <option value="{{ $item->id_kategori_barang }}">{{ $item->id_kategori_barang }}</option>
                          @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="id_stock">Jumlah Barang</label>
                        <select name="id_stock" id="id_stock" class="form-control">
                          <option value="" selected disabled hidden>-- Pilih --</option>
                          @foreach ($stock as $item)
                              <option value="{{ $item->id_stock }}">{{ $item->id_stock }}</option>
                          @endforeach
                      </select>
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