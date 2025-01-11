<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKependudukanAgama extends Model
{
    use HasFactory;

    protected $table = 'data_kependudukan_agama';

    protected $fillable = [
        'jenis_kelompok',
        'laki_laki',
        'perempuan',
        'jumlah',
    ];
}
