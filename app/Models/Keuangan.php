<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $table = 'keuangan';

    protected $fillable = ['id_keuangan','tanggal_keuangan','nominal_pamasukan','nominal_pengeluaran'];
}
