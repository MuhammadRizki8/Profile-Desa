<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataPekerjaan;

class DataPekerjaanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['jenis_kelompok' => 'BELUM/TIDAK BEKERJA', 'laki_laki' => 553, 'perempuan' => 609, 'jumlah' => 1162],
            ['jenis_kelompok' => 'MENGURUS RUMAH TANGGA', 'laki_laki' => 0, 'perempuan' => 1518, 'jumlah' => 1518],
            ['jenis_kelompok' => 'PELAJAR/MAHASISWA', 'laki_laki' => 927, 'perempuan' => 857, 'jumlah' => 1784],
            ['jenis_kelompok' => 'PENSIUNAN', 'laki_laki' => 0, 'perempuan' => 0, 'jumlah' => 0],
            ['jenis_kelompok' => 'PEGAWAI NEGERI SIPIL (PNS)', 'laki_laki' => 61, 'perempuan' => 47, 'jumlah' => 108],
            // Tambahkan data lainnya sesuai dengan tabel yang diberikan
        ];

        foreach ($data as $item) {
            DataPekerjaan::create($item);
        }
    }
}
