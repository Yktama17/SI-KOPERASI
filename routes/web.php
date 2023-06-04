<?php

use App\Http\Controllers\AsetController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KategoriAsetController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PengadaanAsetController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\StockController;
use App\Models\Pengadaan_aset;
use App\Models\PengadaanAset;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('Welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::controller(BarangController::class)->prefix('barang')->group( function() {
    route::get('','index')->name('barang');
    route::get('tambah','tambah')->name('barang.tambah');
    route::post('tambah','simpan')->name('barang.tambah.simpan');
    route::get('edit/{id}','edit')->name('barang.edit');
    route::post('edit/{id}','update')->name('barang.tambah.update');
    route::get('hapus/{id}','hapus')->name('barang.hapus');
});

Route::get('downloadpdf', [BarangController::class, 'downloadpdf'])->name('barang.downloadpdf');

route::controller(StockController::class)->prefix('stock')->group( function(){
    route::get('','index')->name('stock');
    route::get('tambah','tambah')->name('stock.tambah');
    route::post('tambah','simpan')->name('stock.tambah.simpan');
    route::get('edit/{id}','edit')->name('stock.edit');
    route::post('edit/{id}','update')->name('stock.tambah.update');
    route::get('hapus/{id}','hapus')->name('stock.hapus');
});

route::controller(AsetController::class)->prefix('aset')->group( function(){
    route::get('','index')->name('aset');
    route::get('tambah','tambah')->name('aset.tambah');
    route::post('tambah','simpan')->name('aset.tambah.simpan');
    route::get('edit/{id}','edit')->name('aset.edit');
    route::post('edit/{id}','update')->name('aset.tambah.update');
    route::get('hapus/{id}','hapus')->name('aset.hapus');
});

route::controller(PengadaanAsetController::class)->prefix('pengadaanaset')->group( function(){
    route::get('','index')->name('pengadaanaset');
    route::get('tambah','tambah')->name('pengadaanaset.tambah');
});

route::controller(KategoriAsetController::class)->prefix('kategoriaset')->group( function(){
    route::get('','index')->name('kategoriaset');
    route::get('tambah','tambah')->name('kategoriaset.tambah');
    route::post('tambah','simpan')->name('kategoriaset.tambah.simpan');
    route::get('edit/{id}','edit')->name('kategoriaset.edit');
    route::post('edit/{id}','update')->name('kategoriaset.tambah.update');
    route::get('hapus/{id}','hapus')->name('kategoriaset.hapus');
});

route::controller(KategoriBarangController::class)->prefix('kategoribarang')->group( function(){
    route::get('','index')->name('kategoribarang');
    route::get('tambah','tambah')->name('kategoribarang.tambah');
    route::post('tambah','simpan')->name('kategoribarang.tambah.simpan');
    route::get('edit/{id}','edit')->name('kategoribarang.edit');
    route::post('edit/{id}','update')->name('kategoribarang.tambah.update');
    route::get('hapus/{id}','hapus')->name('kategoribarang.hapus');
});

route::controller(KeuanganController::class)->prefix('keuangan')->group( function(){
    route::get('','index')->name('keuangan');
    route::get('tambah','tambah')->name('keuangan.tambah');
    route::post('tambah','simpan')->name('keuangan.tambah.simpan');
    route::get('edit/{id}','edit')->name('keuangan.edit');
    route::post('edit/{id}','update')->name('keuangan.tambah.update');
    route::get('hapus/{id}','hapus')->name('keuangan.hapus');
});

route::controller(PengirimanController::class)->prefix('pengiriman')->group( function(){
    route::get('','index')->name('pengiriman');
    route::get('tambah','tambah')->name('pengiriman.tambah');
    route::post('tambah','simpan')->name('pengiriman.tambah.simpan');
    route::get('edit/{id}','edit')->name('pengiriman.edit');
    route::post('edit/{id}','update')->name('pengiriman.tambah.update');
    route::get('hapus/{id}','hapus')->name('pengiriman.hapus');
});

route::controller(GudangController::class)->prefix('gudang')->group( function(){
    route::get('','index')->name('gudang');
    route::get('tambah','tambah')->name('gudang.tambah');
    route::post('tambah','simpan')->name('gudang.tambah.simpan');
    route::get('edit/{id}','edit')->name('gudang.edit');
    route::post('edit/{id}','update')->name('gudang.tambah.update');
    route::get('hapus/{id}','hapus')->name('gudang.hapus');
});



