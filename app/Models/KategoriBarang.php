<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;
    protected $table = 'kategoribarang';

    protected $fillable = ['id_kategori_barang','nama_kategori'];
    
}
