<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAset extends Model
{
    use HasFactory;
    protected $table = 'kategoriaset';

    protected $fillable = ['id_kategori_aset','nama_kategori'];
}
