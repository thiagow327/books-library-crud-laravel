@extends('layouts.app')

@section('content')
    <h1>Livros</h1>
    <a href="{{ route('books.create') }}">Novo Livro</a>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Páginas</th>
                <th>Edição</th>
                <th>Editora</th>
                <th>Ações</th>
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

                    <td>
                        <a href="{{ route('books.show', $book->id) }}">Ver</a>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection
