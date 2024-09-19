@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <div class="card">
        <div class="card-body">

            <p><strong>Autor:</strong> {{ $book->author }}</p>
            <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
            <p><strong>Páginas:</strong> {{ $book->quantity_pages }}</p>
            <p><strong>Edição:</strong> {{ $book->edition }}</p>
            <p><strong>Editora:</strong> {{ $book->publisher }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Editar</a>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
@endsection
