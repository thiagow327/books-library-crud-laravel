<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'sometimes|required|string|max:255',
            'quantity_pages' => 'required|integer',
            'edition' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'title.max' => 'Title is too long',

            'author.required' => 'Author is required',
            'author.string' => 'Author must be a string',
            'author.max' => 'Author is too long',

            'isbn.required' => 'ISBN is required',
            'isbn.string' => 'ISBN must be a string',
            'isbn.max' => 'ISBN is too long',
            'isbn.unique' => 'ISBN already exists',

            'quantity_pages.required' => 'Quantity of pages is required',
            'quantity_pages.integer' => 'Quantity of pages must be an integer',

            'edition.required' => 'Edition is required',
            'edition.string' => 'Edition must be a string',
            'edition.max' => 'Edition is too long',

            'publisher.required' => 'Publisher is required',
            'publisher.string' => 'Publisher must be a string',
            'publisher.max' => 'Publisher is too long',
        ];
    }
}
