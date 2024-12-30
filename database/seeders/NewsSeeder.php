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
                'image' => 'news_images/dummy1.jpg',
                'title' => 'First News Title',
                'news' => 'This is the content of the first news article.',
                'description' => 'Short description of the first news.',
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'news_images/dummy2.jpg',
                'title' => 'Second News Title',
                'news' => 'This is the content of the second news article.',
                'description' => 'Short description of the second news.',
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'news_images/dummy3.jpg',
                'title' => 'Third News Title',
                'news' => 'This is the content of the third news article.',
                'description' => 'Short description of the third news.',
                'date' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
