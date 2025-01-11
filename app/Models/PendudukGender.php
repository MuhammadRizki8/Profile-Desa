<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukGender extends Model
{
    protected $table = 'penduduk_gender';

    protected $fillable = ['jenis', 'jumlah'];
}
