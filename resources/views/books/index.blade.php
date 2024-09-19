@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Bibliotéca de Livros</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Novo Livro</a>
    </div>


    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Páginas</th>
                <th>Edição</th>
                <th>Editora</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->quantity_pages }}</td>
                    <td>{{ $book->edition }}</td>
                    <td>{{ $book->publisher }}</td>

                    <td class="text-center">
                        <div aria-label="Ações">
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="post"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja excluir este livro?')">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
    </table>

    {{ $books->links() }}
@endsection
