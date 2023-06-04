<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Pengiriman;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index(){
        $Pengiriman = Pengiriman::get();

        return view('Pengiriman.index', ['pengiriman'=>$Pengiriman]);
    }

    public function tambah(){
        $gudang = Gudang::all();
        $barang= Barang::all();
        $data = array_merge(compact('gudang'), compact('barang'));
        return view('Pengiriman.form', $data);
    }

    
    public function simpan(Request $request){
        $data = [
            'id_pengiriman'=>$request->id_pengiriman,
            'id_gudang'=>$request->id_gudang,
            'id_barang'=>$request->id_barang,
            'rute'=>$request->rute,
        ];

        Pengiriman::create($data);

        return redirect()->route('pengiriman');
    }

    
    public function edit($id)
    {
        $Pengiriman = Pengiriman::find($id);
        return view('Pengiriman.form', ['pengiriman' => $Pengiriman]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_pengiriman'=>$request->id_pengiriman,
            'id_gudang'=>$request->id_gudang,
            'id_barang'=>$request->id_barang,
            'rute'=>$request->rute,
        ];
        Pengiriman::find($id)->update($data);

        return redirect()->route('pengiriman');
}
        public function hapus($id)
        {
            Pengiriman::find($id)->delete();

            return redirect()->route('pengiriman');
        }
}
