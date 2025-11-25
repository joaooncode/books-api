<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genere extends Model
{
    /** @use HasFactory<\Database\Factories\GenereFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
