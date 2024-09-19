<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Exception;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        DB::beginTransaction();

        try {
            $book = Book::create($request->validated());

            DB::commit();

            return response()->json([
                'status' => true,
                'book' => $book,
                'message' => 'Book created successfully',
            ], 201);
        } catch (Exception $exception) {
            DB::rollBack();

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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
