<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'publish_year' => $this->publish_year,
            'author' => new AuthorResource($this->whenLoaded('author')),
            'genere' => new GenreResource($this->whenLoaded('genre')),
            'links' => [
                'self' => route('books.show', $this->id)
            ]
        ];
    }


    public function withResponse($request, $response)
    {
        $response->setEncodingOptions(
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE
        );
    }
}
