<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::insert([
            [
                'image' => 'news_images/1735663461_golang-img.png',
                'title' => 'First News Title',
                'news' => 'This is the content of the first news article.',
                'description' => 'Short description of the first news.',
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'news_images/1735663524_Screenshot 2024-11-04 165858.png',
                'title' => 'Second News Title',
                'news' => 'This is the content of the second news article.',
                'description' => 'Short description of the second news.',
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
