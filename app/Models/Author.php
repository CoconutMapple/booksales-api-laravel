<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'birth_year',
        'nationality',
        'bio',
    ];

    /**
     * Get all books by this author.
     *
     * @return HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    /**
     * Get all authors from database
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllAuthors()
    {
        return self::all();
    }
}