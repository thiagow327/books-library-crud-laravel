@extends('layouts.app')

@section('content')
    <h1>Editar Livro</h1>

    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}">
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}">
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{ $book->isbn }}">
        </div>
        <div>
            <label for="pages">Páginas</label>
            <input type="number" name="quantity_pages" id="quantity_pages" value="{{ $book->quantity_pages }}">
        </div>
        <div>
            <label for="edition">Edição</label>
            <input type="text" name="edition" id="edition" value="{{ $book->edition }}">
        </div>
        <div>
            <label for="publisher">Editora</label>
            <input type="text" name="publisher" id="publisher" value="{{ $book->publisher }}">
        </div>
        <button type="submit">Salvar</button>
    </form>
@endsection
