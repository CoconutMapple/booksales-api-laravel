<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * Get all authors as static data
     * 
     * @return array
     */
    public static function getAllAuthors()
    {
        return [
            [
                'id' => 1,
                'name' => 'J.K. Rowling',
                'birth_year' => 1965,
                'nationality' => 'British'
            ],
            [
                'id' => 2,
                'name' => 'Stephen King',
                'birth_year' => 1947,
                'nationality' => 'American'
            ],
            [
                'id' => 3,
                'name' => 'Agatha Christie',
                'birth_year' => 1890,
                'nationality' => 'British'
            ],
            [
                'id' => 4,
                'name' => 'Dan Brown',
                'birth_year' => 1964,
                'nationality' => 'American'
            ],
            [
                'id' => 5,
                'name' => 'Paulo Coelho',
                'birth_year' => 1947,
                'nationality' => 'Brazilian'
            ]
        ];
    }

    /**
     * Get author by ID
     * 
     * @param int $id
     * @return array|null
     */
    public static function find($id)
    {
        $authors = self::getAllAuthors();
        
        foreach ($authors as $author) {
            if ($author['id'] == $id) {
                return $author;
            }
        }
        
        return null;
    }
}
