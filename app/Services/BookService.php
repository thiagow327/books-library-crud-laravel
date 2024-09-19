<?php

namespace App\Services;

use App\Contracts\BookRepositoryInterface;

class BookService
{
    protected $repository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->repository = $bookRepository;
    }

    public function store($data)
    {
        return $this->repository->create($data);
    }
}
