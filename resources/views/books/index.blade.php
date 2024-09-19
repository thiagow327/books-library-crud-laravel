@extends('layouts.app')

@section('content')
    <h1>Livros</h1>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Páginas</th>
                <th>Edição</th>
                <th>Editora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->publisher }}</td>
                </tr>
            @endforeach
    </table>
@endsection
