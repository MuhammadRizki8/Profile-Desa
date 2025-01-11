<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukUmur extends Model
{
    protected $table = 'penduduk_umur';

    protected $fillable = ['umur', 'laki', 'perempuan', 'total'];
}
