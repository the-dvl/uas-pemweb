<?php
// src/database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CompanyProfileSeeder::class,
            ServiceSeeder::class,
            FeatureSeeder::class,
            HeroSeeder::class,
            ContactSeeder::class,
            ServiceRequestSeeder::class,
            // Tambahkan seeder lain jika diperlukan
        ]);
    }
}
