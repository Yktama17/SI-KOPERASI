<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Stock;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class BarangController extends Controller
{
   
    public function index()
    {
        $Barang = Barang::get();

        return view('barang.index', ['barang' => $Barang]);
    }

    public function downloadpdf()
    {
        $barang = Barang::all();
        if ($barang) {
            // view()->share('barang', $Barang);
            $pdf = PDF::loadView('barang.cetak-barang', compact('barang'));
            return $pdf->download('laporan_barang.pdf');
        } else {
            // Handle jika $barang kosong atau null
            return redirect()->back()->with('error', 'Data barang tidak tersedia.');
        }
    }


    public function tambah()
    {
        $kategoribarang = KategoriBarang::all();
        $stock = Stock::all();
        $data = array_merge(compact('kategoribarang'), compact('stock'));
        return view('Barang.form', $data);
    }


    public function simpan(Request $request)
    {
        $data = [
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'id_kategori_barang' => $request->id_kategori_barang,
            'id_stock' => $request->id_stock,
        ];

        Barang::create($data);

        return redirect()->route('barang');
    }


    public function edit($id)
    {
        $barang = Barang::find($id);
        $kategoribarang = KategoriBarang::all();
        $stock = Stock::all();
        return view('Barang.form', ['kategoribarang' => $kategoribarang, 'barang' => $barang, 'stock' => $stock]);
    }

    public function update($id, Request $request)
    {
        $data = [
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'id_kategori_barang' => $request->id_kategori_barang,
            'id_stock' => $request->id_stock,
        ];
        Barang::find($id)->update($data);

        return redirect()->route('barang');
    }
    public function hapus($id)
    {
        Barang::find($id)->delete();

        return redirect()->route('barang');
    }
}
