<?php

namespace Database\Seeders;
use App\Models\News;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert multiple records into the news table
        News::create([
            'image' => 'image1.jpg',
            'title' => 'Breaking News 1',
            'description' => 'Description for breaking news 1.',
            'date' => '2024-01-01',
        ]);

        News::create([
            'image' => 'image2.jpg',
            'title' => 'Breaking News 2',
            'description' => 'Description for breaking news 2.',
            'date' => '2024-01-01',
        ]);

        News::create([
            'image' => 'image3.jpg',
            'title' => 'Breaking News 3',
            'description' => 'Description for breaking news 3.',
            'date' => '2024-01-01',
        ]);
    }
}