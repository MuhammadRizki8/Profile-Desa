<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'image',
        'title',
        'description',
        'date',
    ];
}
