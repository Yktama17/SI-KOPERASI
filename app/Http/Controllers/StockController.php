<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Gudang;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(){
        $Stock = Stock::get();

        return view('Stock.index', ['stock'=>$Stock]);
    }

    public function tambah(){
        $barang = Barang::all();
        $gudang= Gudang::all();
        $data = array_merge(compact('barang'), compact('gudang'));
        return view('Stock.form', $data);
    }

    
    public function simpan(Request $request){
        $data = [
            'id_stock'=>$request->id_stock,
            'id_barang'=>$request->id_barang,
            'id_gudang'=>$request->id_gudang,
            'jumlah_Barang'=>$request->jumlah_barang,
        ];

        Stock::create($data);

        return redirect()->route('stock');
    }

    
    public function edit($id)
    {
        $Stock = Stock::find($id);
        return view('Stock.form', ['stock' => $Stock]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_stock'=>$request->id_stock,
            'id_barang'=>$request->id_barang,
            'id_gudang'=>$request->id_gudang,
            'jumlah_Barang'=>$request->jumlah_barang,
        ];
        Stock::find($id)->update($data);

        return redirect()->route('stock');
}
        public function hapus($id)
        {
            Stock::find($id)->delete();

            return redirect()->route('stock');
        }
}
