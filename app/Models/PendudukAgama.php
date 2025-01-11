<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukAgama extends Model
{
    protected $table = 'penduduk_agama';

    protected $fillable = ['agama', 'laki', 'perempuan', 'total'];
}
