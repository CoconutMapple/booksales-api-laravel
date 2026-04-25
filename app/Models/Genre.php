<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
     * Get all genres as static data
     * 
     * @return array
     */
    public static function getAllGenres()
    {
        return [
            [
                'id' => 1,
                'name' => 'Fiction',
                'description' => 'Imaginative storytelling and creative narratives'
            ],
            [
                'id' => 2,
                'name' => 'Non-Fiction',
                'description' => 'Factual books based on real events and information'
            ],
            [
                'id' => 3,
                'name' => 'Mystery',
                'description' => 'Crime-solving and detective stories'
            ],
            [
                'id' => 4,
                'name' => 'Science Fiction',
                'description' => 'Futuristic and technological narratives'
            ],
            [
                'id' => 5,
                'name' => 'Romance',
                'description' => 'Love stories and romantic relationships'
            ]
        ];
    }

    /**
     * Get genre by ID
     * 
     * @param int $id
     * @return array|null
     */
    public static function find($id)
    {
        $genres = self::getAllGenres();
        
        foreach ($genres as $genre) {
            if ($genre['id'] == $id) {
                return $genre;
            }
        }
        
        return null;
    }
}
