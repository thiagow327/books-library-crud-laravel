<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\BookStoreRequest;
use App\Http\Requests\BookWebUpdateRequest;
use App\Models\Book;
use App\Services\BookService;

class BookController
{
    protected $book;
    protected $service;

    public function __construct(Book $book, BookService $bookService)
    {
        $this->book = $book;
        $this->service = $bookService;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $books = $this->book->paginate(4);

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param BookStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BookStoreRequest $request): RedirectResponse
    {
        $this->service->store($request->all());

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Book $book): View
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Book $book): View
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     * @param BookWebUpdateRequest $request
     * @param string $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BookWebUpdateRequest $request, string $id): RedirectResponse
    {
        $book = $this->book->find($id);
        $book->update($request->all());

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
