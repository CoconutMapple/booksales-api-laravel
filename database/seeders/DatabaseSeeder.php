<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call AuthorSeeder first (because books depend on authors)
        $this->call([
            AuthorSeeder::class,
            BookSeeder::class,
        ]);
    }
}