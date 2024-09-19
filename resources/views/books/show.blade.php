@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>

    <p><strong>Autor:</strong> {{ $book->author }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Páginas:</strong> {{ $book->quantity_pages }}</p>
    <p><strong>Edição:</strong> {{ $book->edition }}</p>
    <p><strong>Editora:</strong> {{ $book->publisher }}</p>
    
    <a href="{{ route('books.edit', $book->id) }}">Editar</a>
    <a href="{{ route('books.index') }}">Voltar</a>
@endsection
