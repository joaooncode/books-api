<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\StoreAuthorRequest;
use App\Http\Requests\V1\UpdateAuthorRequest;
use App\Models\Author;
use App\Http\Controllers\Controller;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{

    /**
     * Exibe uma lista paginada de autores.
     *
     * @return \App\Http\Resources\AuthorCollection|\Illuminate\Http\JsonResponse
     *         Retorna uma coleção de recursos de autor se houver autores,
     *         ou uma resposta JSON com status 404 se nenhum autor for encontrado.
     */
    public function index()
    {

        $authors = Author::paginate();

        if ($authors->isEmpty()) {
            return response()->json([
                'message' => 'No authors found',
            ], 404);
        }

        return new AuthorCollection($authors);
    }
    /**
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \App\Http\Resources\AuthorResource|\Illuminate\Http\JsonResponse
     *         Retorna o recurso de autor criado com status 201, ou erros de validação com status 422.
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->validated());
        return new AuthorResource($author);
    }

    /**
     * Exibe o recurso especificado.
     *
     * @param  \App\Models\Author  $author
     * @return \App\Http\Resources\AuthorResource
     *         Retorna um recurso de autor.
     */
    public function show(Author $author)
    {
        return new AuthorResource($author);
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \App\Http\Resources\AuthorResource|\Illuminate\Http\JsonResponse
     *         Retorna o recurso de autor atualizado com status 200, ou erros de validação com status 422.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());
        return new AuthorResource($author);
    }

    /**
     * Remove o recurso especificado do armazenamento.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\JsonResponse
     *         Retorna uma resposta JSON vazia com status 204 (No Content) em caso de sucesso.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return response()->noContent();
    }

    /**
     * Exibe todos os autores que foram excluídos (soft deleted).
     *
     * @return \App\Http\Resources\AuthorCollection
     *         Retorna uma coleção de recursos de autores excluídos.
     */
    public function trashed()
    {
        $authors = Author::onlyTrashed()->get();
        return new AuthorCollection($authors);
    }

    /**
     * Restaura um autor que foi excluído (soft deleted).
     *
     * @param  \App\Models\Author  $author
     * @return \App\Http\Resources\AuthorResource
     *         Retorna o recurso do autor restaurado.
     */
    public function restore(Author $author)
    {
        $author = Author::withTrashed()->findOrFail($author->id);

        $author->restore();

        return new AuthorResource($author);
    }
}
