<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:150',
            'description' => 'required|string|max:150',
            'isbn' => 'required|string|max:13|unique:books,isbn',
            'publish_year' => 'required|integer|max:' . (date('Y') + 1),
            'author_id' => 'required|integer|exists:authors,id',
            'genre_id' => 'required|integer|exists:genres,id'
        ];
    }
    public function messages()
    {
        return [
            'isbn.unique' => 'Este ISBN já está cadastrado em nossa biblioteca.',
            'author_id.exists' => 'O autor selecionado não foi encontrado.',
            'genre_id.exists' => 'O gênero selecionado é inválido.',
        ];
    }
}
