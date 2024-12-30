<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin', // Nama admin
            'email' => 'admin@example.com', // Email admin
            'password' => bcrypt('admin123'), // Password dienkripsi menggunakan bcrypt
        ]);
    }
}
