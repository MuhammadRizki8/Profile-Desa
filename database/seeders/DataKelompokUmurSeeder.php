<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataKelompokUmur;

class DataKelompokUmurSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['jenis_kelompok' => 'Balita (0-5 tahun)', 'laki_laki' => 601, 'perempuan' => 583, 'jumlah' => 1184],
            ['jenis_kelompok' => 'Anak-Anak (6-17 tahun)', 'laki_laki' => 1553, 'perempuan' => 1467, 'jumlah' => 3020],
            ['jenis_kelompok' => 'Dewasa (18-50 tahun)', 'laki_laki' => 1226, 'perempuan' => 1163, 'jumlah' => 2389],
            ['jenis_kelompok' => 'Tua (50-120 tahun)', 'laki_laki' => 1437, 'perempuan' => 1359, 'jumlah' => 2796],
        ];

        foreach ($data as $item) {
            DataKelompokUmur::create($item);
        }
    }
}

