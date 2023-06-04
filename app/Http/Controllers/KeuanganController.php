<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function index(){
        $Keuangan = Keuangan::get();

        return view('Keuagan.index', ['keuangan'=>$Keuangan]);
    }

    public function tambah(){
        return view('Keuagan.form');
    }

    
    public function simpan(Request $request){
        $data = [
            'id_keuangan'=>$request->id_keuangan,
            'tanggal_keuangan'=>$request->tanggal_keuangan,
            'nominal_pemasukan'=>$request->nominal_pemasukan,
            'nominal_pengeluaran'=>$request->nominal_pengeluaran,
        ];

        Keuangan::create($data);

        return redirect()->route('keuangan');
    }

    
    public function edit($id)
    {
        $Keuangan = Keuangan::find($id);
        return view('Keuagan.form', ['keuangan' => $Keuangan]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_keuangan'=>$request->id_keuangan,
            'tanggal_keuangan'=>$request->tanggal_keuangan,
            'nominal_pemasukan'=>$request->nominal_pemasukan,
            'nominal_pengeluaran'=>$request->nominal_pengeluaran,
        ];
        Keuangan::find($id)->update($data);

        return redirect()->route('keuangan');
}
        public function hapus($id)
        {
            Keuangan::find($id)->delete();

            return redirect()->route('keuangan');
        }
}
