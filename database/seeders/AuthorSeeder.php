<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'J.K. Rowling',
                'birth_year' => 1965,
                'nationality' => 'British',
                'bio' => 'British author best known for the Harry Potter series. One of the best-selling authors of all time.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Stephen King',
                'birth_year' => 1947,
                'nationality' => 'American',
                'bio' => 'American author of horror, supernatural fiction, suspense, crime, science-fiction, and fantasy novels.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Agatha Christie',
                'birth_year' => 1890,
                'nationality' => 'British',
                'bio' => 'English writer known for her detective novels, especially those featuring Hercule Poirot and Miss Marple.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dan Brown',
                'birth_year' => 1964,
                'nationality' => 'American',
                'bio' => 'American author best known for his thriller novels, including The Da Vinci Code and Angels & Demons.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Paulo Coelho',
                'birth_year' => 1947,
                'nationality' => 'Brazilian',
                'bio' => 'Brazilian lyricist and novelist, best known for his novel The Alchemist, which has been translated into 80 languages.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('authors')->insert($authors);
    }
}