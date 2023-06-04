<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengadaanAset extends Model
{
    use HasFactory;
    protected $table = 'pengadaanaset';

    protected $fillable = ['id_pengadaan_aset','id_aset','tanggal_pengadaan','nilai_aset'];
}
