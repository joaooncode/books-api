<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Fantasia',
            'Ficção Científica',
            'Mistério',
            'Suspense',
            'Romance',
            'Terror',
            'Ficção Histórica',
            'Biografia',
            'Autoajuda',
            'Jovem Adulto'
        ];

        foreach ($genres as $genreName) {
            Genre::firstOrCreate(['name' => $genreName]);
        }
    }
}
