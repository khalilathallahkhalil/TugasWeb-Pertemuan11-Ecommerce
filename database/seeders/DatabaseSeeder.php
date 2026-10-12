<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat User
        \App\Models\User::create([
            'name' => 'Admin System',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'Editor Content',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'editor',
        ]);

        \App\Models\User::create([
            'name' => 'Regular User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // 2. Buat Kategori
        $categories = ['Elektronik', 'Pakaian', 'Makanan & Minuman', 'Kesehatan', 'Olahraga'];
        foreach ($categories as $cat) {
            \App\Models\Category::create([
                'name' => $cat,
                'slug' => \Illuminate\Support\Str::slug($cat),
            ]);
        }

        // 3. Buat 55 Produk
        \App\Models\Product::factory(55)->create();
    }
}