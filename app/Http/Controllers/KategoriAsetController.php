<?php

namespace App\Http\Controllers;

use App\Models\KategoriAset;
use App\Models\KategoriBarang;
use Illuminate\Http\Request;

class KategoriAsetController extends Controller
{
    public function index(){
        $KategoriAset = KategoriAset::get();

        return view('KategoriAset.index', ['kategoriaset'=>$KategoriAset]);
    }

    public function tambah(){
        return view('KategoriAset.form');
    }

    
    public function simpan(Request $request){
        $data = [
            'id_kategori_aset'=>$request->id_kategori_aset,
            'nama_kategori'=>$request->nama_kategori,
        ];

        KategoriAset::create($data);

        return redirect()->route('kategoriaset');
    }

    
    public function edit($id)
    {
        $KategoriAset = KategoriAset::find($id);
        return view('KategoriAset.form', ['kategoriaset' => $KategoriAset]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_kategori_aset'=>$request->id_kategori_aset,
            'nama_kategori'=>$request->nama_kategori,
        ];
        KategoriAset::find($id)->update($data);

        return redirect()->route('kategoriaset');
}
        public function hapus($id)
        {
            KategoriAset::find($id)->delete();

            return redirect()->route('kategoriaset');
        }
}
