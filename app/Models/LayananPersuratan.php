<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananPersuratan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default (plural dari nama model)
    protected $table = 'layanan_persuratan';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'layanan',
        'detail',
        'persyaratan',
        'jam_pelayanan',
        'hari_pelayanan',
        'tata_cara',
    ];
}
