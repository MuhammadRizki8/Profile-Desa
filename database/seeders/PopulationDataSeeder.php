<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopulationDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jenis_kelompok' => 'Laki-Laki', 'jumlah' => 4785],
            ['jenis_kelompok' => 'Perempuan', 'jumlah' => 4604],
        ];

        DB::table('population_data')->insert($data);
    }
}
