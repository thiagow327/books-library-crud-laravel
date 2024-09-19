<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function create($data)
    {
        return $this->book->create($data);
    }
}
