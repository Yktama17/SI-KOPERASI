@extends('layouts.app')
@section('title','Form Barang')

@section('content')
<form action="{{ isset($aset) ? route('aset.tambah.update', $aset->id) : route('aset.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($aset) ? 'Form Edit aset' : 'Form Tambah aset' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                    <label for="id_aset">Id_aset</label>
                    <input type="text" class="form-control" id="id_aset" name="id_aset" value="{{ isset($aset) ? $aset->id_aset : '' }}">
                    </div>
                    <div class="form-group">
                    <label for="nama_aset">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_aset" name="nama_aset" value="{{ isset($aset) ? $aset->nama_aset : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="id_kategori_aset">Kategori Aset</label>
                        <select name="id_kategori_aset" id="id_kategori_aset" class="form-control">
                          <option value="" selected disabled hidden>-- Pilih --</option>
                          @foreach ($kategoriaset as $item)
                              <option value="{{ $item->id_kategori_aset }}">{{ $item->id_kategori_aset }}</option>
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