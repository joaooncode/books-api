<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = database_path('data/books.json');

        if (!File::exists($jsonPath)) {
            $this->command->error("File not found: $jsonPath");
            return;
        }

        $booksData = json_decode(File::get($jsonPath), true);
        $totalBooksToSeed = 250;
        $count = 0;
        $genreIds = Genre::pluck('id')->toArray();

        if (empty($genreIds)) {
            $this->call(GenreSeeder::class);
            $genreIds = Genre::pluck('id')->toArray();
        }

        while ($count < $totalBooksToSeed) {
            foreach ($booksData as $bookData) {
                if ($count >= $totalBooksToSeed) {
                    break;
                }

                $author = Author::firstOrCreate(
                    ['name' => $bookData['author']],
                    [
                        'bio' => 'Famous author from ' . $bookData['country'],
                        'birth_date' => now()->subYears(rand(30, 100)), // Approximate
                    ]
                );

                $title = $bookData['title'];
                // If we are looping again, append a copy number or variation
                $iteration = floor($count / count($booksData));
                if ($iteration > 0) {
                    $title .= " (Copy " . ($iteration) . ")";
                }

                Book::create([
                    'title' => $title,
                    'description' => "A classic book from " . $bookData['country'] . " written in " . $bookData['language'] . ". Link: " . $bookData['link'],
                    'isbn' => fake()->isbn13(),
                    'publish_year' => $bookData['year'] > 0 ? $bookData['year'] : 1900, // Handle BC years roughly or just keep them
                    'author_id' => $author->id,
                    'genre_id' => $genreIds[array_rand($genreIds)],
                ]);

                $count++;
            }
        }
    }
}
