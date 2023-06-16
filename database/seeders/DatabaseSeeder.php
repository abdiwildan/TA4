<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Wildan Abdilah',
            'username' => 'wildanabdi',
            'email' => 'wildanabdilah54@gmail.com',
            'password' => bcrypt('password')
        ]);
        User::factory(3)->create();


        Category::create([
            'name_category' => 'Sembako',
            'slug' => 'sembako',
            'img' => 'kategori1.png'
        ]);

        Category::create([
            'name_category' => 'Makanan dan Minuman',
            'slug' => 'makanan-dan-minuman',
            'img' => 'kategori2.png'
        ]);

        Category::create([
            'name_category' => 'Peralatan bayi',
            'slug' => 'peralatan-bayi',
            'img' => 'kategori3.png'
        ]);

        Category::create([
            'name_category' => 'Alat Rumah Tangga',
            'slug' => 'alat-rumah-tangga',
            'img' => 'kategori4.png'
        ]);

        Category::create([
            'name_category' => 'Kesehatan dan Kecantikan',
            'slug' => 'kesehatan-dan-kecantikan',
            'img' => 'kategori5.png'
        ]);

        Product::factory(15)->create();
    }
}
