<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPersebaranPendudukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['group' => '001', 'male' => 281, 'female' => 215, 'total' => 496],
            ['group' => '002', 'male' => 315, 'female' => 262, 'total' => 577],
            ['group' => '003', 'male' => 258, 'female' => 253, 'total' => 511],
            ['group' => '004', 'male' => 291, 'female' => 296, 'total' => 587],
            ['group' => '005', 'male' => 582, 'female' => 574, 'total' => 1156],
            ['group' => '006', 'male' => 282, 'female' => 283, 'total' => 565],
            ['group' => '007', 'male' => 335, 'female' => 308, 'total' => 643],
            ['group' => '008', 'male' => 319, 'female' => 326, 'total' => 645],
            ['group' => '009', 'male' => 198, 'female' => 196, 'total' => 394],
            ['group' => '010', 'male' => 370, 'female' => 383, 'total' => 753],
            ['group' => '011', 'male' => 415, 'female' => 405, 'total' => 820],
            ['group' => '012', 'male' => 215, 'female' => 195, 'total' => 410],
            ['group' => '013', 'male' => 356, 'female' => 347, 'total' => 703],
            ['group' => '014', 'male' => 263, 'female' => 249, 'total' => 512],
            ['group' => '015', 'male' => 305, 'female' => 312, 'total' => 617],
        ];

        DB::table('data_persebaran_penduduk')->insert($data);
    }
}
