<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author_id',
        'isbn',
        'publication_year',
        'price',
        'stock',
        'description',
    ];

    /**
     * Get the author that owns the book.
     *
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    /**
     * Get all books from database
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllBooks()
    {
        return self::with('author')->get();
    }
}