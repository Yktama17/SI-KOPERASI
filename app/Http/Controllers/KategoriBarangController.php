<?php

namespace App\Http\Controllers;

use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index(){
        $KategoriBarang = KategoriBarang::get();

        return view('KategoriBarang.index', ['kategoribarang'=>$KategoriBarang]);
    }

    public function tambah(){
        return view('KategoriBarang.form');
    }

    
    public function simpan(Request $request){
        $data = [
            'id_kategori_barang'=>$request->id_kategori_barang,
            'nama_kategori'=>$request->nama_kategori,
        ];

        KategoriBarang::create($data);

        return redirect()->route('kategoribarang');
    }

    
    public function edit($id)
    {
        $KategoriBarang = KategoriBarang::find($id);
        return view('KategoriBarang.form', ['kategoribarang' => $KategoriBarang]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_kategori_barang'=>$request->id_kategori_barang,
            'nama_kategori'=>$request->nama_kategori,
        ];
        KategoriBarang::find($id)->update($data);

        return redirect()->route('kategoribarang');
}
        public function hapus($id)
        {
            KategoriBarang::find($id)->delete();

            return redirect()->route('kategoribarang');
        }
}

