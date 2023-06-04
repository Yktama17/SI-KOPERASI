@extends('layouts.app')
@section('title','Form Stock')

@section('content')
<form action="{{ isset($stock) ? route('stock.tambah.update', $stock->id) : route('stock.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($stock) ? 'Form Edit stock' : 'Form Tambah stock' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_stock">Id_stock</label>
                    <input type="text" class="form-control" id="id_stock" name="id_stock" value="{{ isset($stock) ? $stock->id_stock : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="id_barang">Id Barang</label>
                        <select name="id_barang" id="id_barang" class="form-control">
                          <option value="" selected disabled hidden>-- Pilih --</option>
                          @foreach ($barang as $item)
                              <option value="{{ $item->id_barang }}">{{ $item->id_barang }}</option>
                          @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="id_gudang">Id Gudang</label>
                        <select name="id_gudang" id="id_gudang" class="form-control">
                          <option value="" selected disabled hidden>-- Pilih --</option>
                          @foreach ($gudang as $item)
                              <option value="{{ $item->id_gudang }}">{{ $item->id_gudang }}</option>
                          @endforeach
                      </select>
                      </div>
                    <div class="form-group">
                    <label for="jumlah_barang">jumlah_barang</label>
                    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="{{ isset($stock) ? $stock->jumlah_Barang : '' }}">
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