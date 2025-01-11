<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataKependudukanAgama;

class DataKependudukanAgamaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['jenis_kelompok' => 'Islam', 'laki_laki' => 4614, 'perempuan' => 4484, 'jumlah' => 9089],
            ['jenis_kelompok' => 'Kristen Katholik', 'laki_laki' => 78, 'perempuan' => 51, 'jumlah' => 129],
            ['jenis_kelompok' => 'Kristen Protestan', 'laki_laki' => 93, 'perempuan' => 69, 'jumlah' => 162],
            ['jenis_kelompok' => 'Hindu', 'laki_laki' => 0, 'perempuan' => 0, 'jumlah' => 0],
            ['jenis_kelompok' => 'Budha', 'laki_laki' => 0, 'perempuan' => 0, 'jumlah' => 0],
            ['jenis_kelompok' => 'Konghucu', 'laki_laki' => 0, 'perempuan' => 0, 'jumlah' => 0],
        ];

        foreach ($data as $item) {
            DataKependudukanAgama::create($item);
        }
    }
}
