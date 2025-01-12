<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananPersuratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanan_persuratan')->insert([
            [
                'layanan' => 'Surat Biodata Penduduk',
                'detail' => 'Layanan untuk membuat surat biodata penduduk',
                'persyaratan' => null,
                'jam_pelayanan' => '08.30 - 15.30 WIB',
                'hari_pelayanan' => 'Senin - Jum’at',
                'tata_cara' => null,
            ],
            [
                'layanan' => 'Surat Keterangan Pindah Penduduk',
                'detail' => 'Permohonan Layanan Surat Keterangan Pindah Penduduk',
                'persyaratan' => json_encode([
                    'Surat Pengantar RT/RW',
                    'Kartu Tanda Penduduk (KTP)',
                    'Melengkapi dokumen',
                    'Kartu Keluarga',
                    'Akta Kelahiran',
                    'Pas Foto 3x4',
                ]),
                'jam_pelayanan' => '08.30 - 15.30 WIB',
                'hari_pelayanan' => 'Senin - Jum’at',
                'tata_cara' => 'Silakan lengkapi persyaratan, lalu upload di halaman layanan kependudukan.',
            ],
            [
                'layanan' => 'Surat Keterangan Jual Beli',
                'detail' => 'Layanan untuk surat keterangan jual beli',
                'persyaratan' => null,
                'jam_pelayanan' => '08.30 - 15.30 WIB',
                'hari_pelayanan' => 'Senin - Jum’at',
                'tata_cara' => null,
            ],
        ]);
    }
}
