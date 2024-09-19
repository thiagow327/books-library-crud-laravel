<?php

namespace App\Services;

use App\Repositories\BookRepository;

class BookService
{
    protected $repository;

    public function __construct(BookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }
}
