<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'image' => 'gallery_images/1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'gallery_images/2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
