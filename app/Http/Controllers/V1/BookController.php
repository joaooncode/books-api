<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\StoreBookRequest;
use App\Http\Requests\V1\UpdateBookRequest;
use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookCollection;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Exibe uma listagem do recurso.
     */
    public function index()
    {
        $books = Book::with(['author', 'genre'])->paginate(10);

        return new BookCollection($books);
    }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     */
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());

        return new BookResource($book);
    }

    /**
     * Exibe o recurso especificado.
     */
    public function show(Book $book)
    {
        $book->load(['author', 'genre']);

        return new BookResource($book);
    }



    /**
     * Atualiza o recurso especificado no armazenamento.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return new BookResource($book);
    }

    /**
     * Remove o recurso especificado do armazenamento.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->noContent();
    }
}
