<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\StoreGenreRequest;
use App\Http\Requests\V1\UpdateGenreRequest;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use App\Http\Resources\GenreCollection;
use App\Http\Resources\GenreResource;

class GenreController extends Controller
{
    /**
     * Exibe uma listagem do recurso.
     */
    public function index()
    {
        $generes = Genre::paginate();
        return new GenreCollection($generes);
    }


    /**
     * Armazena um recurso recém-criado no armazenamento.
     */
    public function store(StoreGenreRequest $request)
    {
        //
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Genre $genre)
    {
        return new GenreResource($genre);
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Genre $genre)
    {
        //
    }
}
