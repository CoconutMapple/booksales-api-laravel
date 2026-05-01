<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author_id',
        'genre_id',
        'price',
        'stock'
    ];

    // 🔥 RELASI KE AUTHOR
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // 🔥 RELASI KE GENRE
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    // 🔥 RELASI KE TRANSACTION
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}