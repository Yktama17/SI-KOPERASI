@extends('layouts.app')
@section('title','Form Data Pengiriman')

@section('content')
<form action="{{ isset($pengiriman) ? route('pengiriman.tambah.update', $pengiriman->id) : route('pengiriman.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($pengiriman) ? 'Form Edit pengiriman' : 'Form Tambah pengiriman' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_pengiriman">Id_pengiriman</label>
                    <input type="text" class="form-control" id="id_pengiriman" name="id_pengiriman" value="{{ isset($pengiriman) ? $pengiriman->id_pengiriman : '' }}">
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
                        <label for="id_barang">Id Barang</label>
                        <select name="id_barang" id="id_barang" class="form-control">
                          <option value="" selected disabled hidden>-- Pilih --</option>
                          @foreach ($barang as $item)
                              <option value="{{ $item->id_barang }}">{{ $item->id_barang }}</option>
                          @endforeach
                      </select>
                      </div>
                    <div class="form-group">
                    <label for="rute">rute</label>
                    <input type="text" class="form-control" id="rute" name="rute" value="{{ isset($pengiriman) ? $pengiriman->rute : '' }}">
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