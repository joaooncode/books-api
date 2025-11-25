<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'publish_year',
        'author_id',
        'genere_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function genere()
    {
        return $this->belongsTo(Author::class);
    }
}
