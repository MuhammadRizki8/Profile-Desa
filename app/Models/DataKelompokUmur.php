<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelompokUmur extends Model
{
    use HasFactory;
    protected $table = 'data_kelompok_umur';

    protected $fillable = [
        'jenis_kelompok', 
        'laki_laki', 
        'perempuan', 
        'jumlah'
    ];
}
