<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VillageInstrumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('village_instruments')->insert([
            'image' => '1.jpg',
            'category' => 'Leadership',
            'position' => 'Kepala Desa',
            'name' => 'John Doe',
            'description' => 'Kepala Desa yang bertugas memimpin desa dengan visi pembangunan yang berkelanjutan.',
            'facebook' => 'https://facebook.com/johndoe',
            'instagram' => 'https://instagram.com/johndoe',
            'email' => 'johndoe@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
