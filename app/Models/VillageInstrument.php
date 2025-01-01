<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageInstrument extends Model
{
    use HasFactory;

    // Menentukan kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'image', 'category', 'position', 'name', 'description', 'facebook', 'instagram', 'email',
    ];
}
