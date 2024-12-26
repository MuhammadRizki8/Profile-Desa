<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PendidikanTerakhir;

class PendidikanTerakhirSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['jenis_kelompok' => 'Tidak/Belum Sekolah', 'laki_laki' => 481, 'perempuan' => 489, 'jumlah' => 970],
            ['jenis_kelompok' => 'Belum Tamat SD/Sederajat', 'laki_laki' => 619, 'perempuan' => 687, 'jumlah' => 1306],
            ['jenis_kelompok' => 'Tamat SD/Sederajat', 'laki_laki' => 793, 'perempuan' => 865, 'jumlah' => 1658],
            ['jenis_kelompok' => 'SLTP/Sederajat', 'laki_laki' => 881, 'perempuan' => 807, 'jumlah' => 1688],
            ['jenis_kelompok' => 'SLTA/Sederajat', 'laki_laki' => 1765, 'perempuan' => 1536, 'jumlah' => 3301],
            ['jenis_kelompok' => 'Diploma I/II', 'laki_laki' => 0, 'perempuan' => 0, 'jumlah' => 0],
            ['jenis_kelompok' => 'Akademi/Diploma III/Sarjana Muda', 'laki_laki' => 101, 'perempuan' => 113, 'jumlah' => 214],
            ['jenis_kelompok' => 'Diploma IV/Strata I', 'laki_laki' => 128, 'perempuan' => 98, 'jumlah' => 226],
            ['jenis_kelompok' => 'Strata II', 'laki_laki' => 17, 'perempuan' => 9, 'jumlah' => 26],
            ['jenis_kelompok' => 'Strata III', 'laki_laki' => 0, 'perempuan' => 0, 'jumlah' => 0],
        ];

        foreach ($data as $item) {
            PendidikanTerakhir::create($item);
        }
    }
}
