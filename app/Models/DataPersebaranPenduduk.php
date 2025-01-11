<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPersebaranPenduduk extends Model
{
    use HasFactory;

    protected $table = 'data_persebaran_penduduk';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'group',
        'male',
        'female',
        'total',
    ];
}
