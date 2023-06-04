<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index(){
        $Gudang = Gudang::get();

        return view('Gudang.index', ['gudang'=>$Gudang]);
    }

    public function tambah(){
        return view('Gudang.form');
    }

    
    public function simpan(Request $request){
        $data = [
            'id_gudang'=>$request->id_gudang,
            'nama_gudang'=>$request->nama_gudang,
            'alamat_gudang'=>$request->alamat_gudang,
            'kapasitas'=>$request->kapasitas,
        ];

        Gudang::create($data);

        return redirect()->route('gudang');
    }

    
    public function edit($id)
    {
        $Gudang = Gudang::find($id);
        return view('Gudang.form', ['gudang' => $Gudang]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_gudang'=>$request->id_gudang,
            'nama_gudang'=>$request->nama_gudang,
            'alamat_gudang'=>$request->alamat_gudang,
            'kapasitas'=>$request->kapasitas,
        ];
        Gudang::find($id)->update($data);

        return redirect()->route('gudang');
}
        public function hapus($id)
        {
            Gudang::find($id)->delete();

            return redirect()->route('gudang');
        }
}
