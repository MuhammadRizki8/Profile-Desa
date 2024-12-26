<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopulationData extends Model
{
    use HasFactory;

    // Tentukan tabel jika berbeda dengan nama model
    protected $table = 'population_data';

    // Field yang boleh diisi (mass-assignable)
    protected $fillable = [
        'jenis_kelompok',
        'jumlah',
    ];
}
