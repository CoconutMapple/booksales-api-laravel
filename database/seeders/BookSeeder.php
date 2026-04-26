<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'author_id' => 1, // J.K. Rowling
                'isbn' => '978-0747532699',
                'publication_year' => 1997,
                'price' => 299000,
                'stock' => 50,
                'description' => 'The first novel in the Harry Potter series, following the adventures of a young wizard, Harry Potter.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Shining',
                'author_id' => 2, // Stephen King
                'isbn' => '978-0307743657',
                'publication_year' => 1977,
                'price' => 250000,
                'stock' => 30,
                'description' => 'A horror novel about a family\'s winter in an isolated hotel and the terrifying events that unfold.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Murder on the Orient Express',
                'author_id' => 3, // Agatha Christie
                'isbn' => '978-0062693662',
                'publication_year' => 1934,
                'price' => 199000,
                'stock' => 40,
                'description' => 'A classic detective novel featuring Hercule Poirot solving a murder on a luxury train.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Da Vinci Code',
                'author_id' => 4, // Dan Brown
                'isbn' => '978-0307474278',
                'publication_year' => 2003,
                'price' => 275000,
                'stock' => 45,
                'description' => 'A mystery thriller that follows symbologist Robert Langdon as he investigates a murder in the Louvre.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Alchemist',
                'author_id' => 5, // Paulo Coelho
                'isbn' => '978-0062315007',
                'publication_year' => 1988,
                'price' => 225000,
                'stock' => 60,
                'description' => 'A philosophical novel about a young shepherd\'s journey to find treasure and discover his personal legend.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('books')->insert($books);
    }
}