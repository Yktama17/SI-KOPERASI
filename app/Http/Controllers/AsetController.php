<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\KategoriAset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index(){
        $Aset = Aset::get();

        return view('aset.index', ['aset'=>$Aset]);
    }

    public function tambah(){
        $kategoriaset = KategoriAset::all();
        $data = array_merge(compact('kategoriaset'));
        return view('aset.form', $data);
    }

    
    public function simpan(Request $request){
        $data = [
            'id_aset'=>$request->id_aset,
            'nama_aset'=>$request->nama_aset,
            'id_kategori_aset'=>$request->id_kategori_aset,
        ];

        Aset::create($data);

        return redirect()->route('aset');
    }

    public function edit($id)
    {
        $aset = Aset::find($id);
        return view('aset.form', ['aset' => $aset]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_aset'=>$request->id_aset,
            'nama_aset'=>$request->nama_aset,
            'id_kategori_aset'=>$request->id_kategori_aset,
        ];
        Aset::find($id)->update($data);

        return redirect()->route('aset');
}
        public function hapus($id)
        {
            Aset::find($id)->delete();

            return redirect()->route('aset');
        }
}
