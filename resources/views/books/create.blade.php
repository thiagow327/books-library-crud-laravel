@extends('layouts.app')

@section('content')
    <h1>Novo Livro</h1>

    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn">
        </div>
        <div>
            <label for="pages">Páginas</label>
            <input type="number" name="quantity_pages" id="quantity_pages">
        </div>
        <div>
            <label for="edition">Edição</label>
            <input type="text" name="edition" id="edition">
        </div>
        <div>
            <label for="publisher">Editora</label>
            <input type="text" name="publisher" id="publisher">
        </div>
        <button type="submit">Salvar</button>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
