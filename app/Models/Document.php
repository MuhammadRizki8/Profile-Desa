<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'documents';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'document',
        'title',
        'category',
        'type',
    ];
}
