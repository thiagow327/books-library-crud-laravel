<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BookUpdateRequest;
use App\Http\Requests\BookStoreRequest;
use App\Models\Book;

class BookController
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $books = Book::all();
        return response()->json([
            'status' => true,
            'books' => $books,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     * @param \App\Http\Requests\BookStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(BookStoreRequest $request): JsonResponse
    {
        try {
            $book = Book::create($request->validated());

            return response()->json([
                'status' => true,
                'book' => $book,
                'message' => 'Book created successfully',
            ], 201);
        } catch (Exception $exception) {

            return response()->json([
                'status' => false,
                'message' => $exception->getMessage(),
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     * 
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id): JsonResponse
    {
        return response()->json([
            'status' => true,
            'book' => Book::find($id),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request\BookUpdateRequest $request
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(BookUpdateRequest $request, Book $book): JsonResponse
    {
        try {
            $book->update($request->validated());

            return response()->json([
                'status' => true,
                'book' => $book,
                'message' => 'Book updated successfully',
            ], 200);
        } catch (Exception $exception) {

            return response()->json([
                'status' => false,
                'message' => $exception->getMessage(),
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $id): JsonResponse
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'status' => false,
                'message' => 'Book not found',
            ], 404);
        }

        try {
            $book->delete();;

            return response()->json([
                'status' => true,
                'message' => 'Book deleted successfully',
            ], 200);
        } catch (Exception $exception) {

            return response()->json([
                'status' => false,
                'message' => $exception->getMessage(),
            ], 400);
        }
    }
}
