<?php

namespace App\Http\Controllers;

use App\Models\PengadaanAset;
use Illuminate\Http\Request;

class PengadaanAsetController extends Controller
{
    public function index(){
        $PengadaanAset = PengadaanAset::get();

        return view('PengadaanAset.index', ['pengadaanaset'=>$PengadaanAset]);
    }

    public function tambah(){
        return view('PengadaanAset.form');
    }

    
    public function simpan(Request $request){
        $data = [
            'id_pengadaan_aset'=>$request->id_pengadaan_aset,
            'id_aset'=>$request->id_aset,
            'tanggal_pengadaan'=>$request->tanggal_pengadaan,
            'nilai_aset'=>$request->nilai_aset,
        ];

        PengadaanAset::create($data);

        return redirect()->route('pengadaanaset');
    }

    public function edit($id)
    {
        $pengadaanaset = PengadaanAset::find($id);
        return view('PengadaanAset.form', ['pengadaanaset' => $pengadaanaset]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_pengadaan_aset'=>$request->id_pengadaan_aset,
            'id_aset'=>$request->id_aset,
            'tanggal_pengadaan'=>$request->tanggal_pengadaan,
            'nilai_aset'=>$request->nilai_aset,
        ];
        PengadaanAset::find($id)->update($data);

        return redirect()->route('pengadaanaset');
}
        public function hapus($id)
        {
            PengadaanAset::find($id)->delete();

            return redirect()->route('pengadaanaset');
        }
}
