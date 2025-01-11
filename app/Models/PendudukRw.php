<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukRw extends Model
{
    protected $table = 'penduduk_rw';

    protected $fillable = ['rw', 'laki', 'perempuan', 'total'];
}
