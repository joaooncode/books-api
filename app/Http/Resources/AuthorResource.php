<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
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
            'name' => $this->name,
            'bio' => $this->bio,
            'birth_date' => $this->birth_date->format('d/m/Y'),
            'links' => [
                'self' => route('authors.show', $this->id),
            ],
        ];
    }

    public function withResponse($request, $response)
    {
        // Força o JSON a ter quebras de linha e barras não escapadas
        $response->setEncodingOptions(JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
