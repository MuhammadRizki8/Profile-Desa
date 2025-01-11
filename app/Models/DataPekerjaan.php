<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'data_pekerjaan';  // Menentukan nama tabel yang benar

    protected $fillable = [
        'jenis_kelompok', 
        'laki_laki', 
        'perempuan', 
        'jumlah'
    ];
}
