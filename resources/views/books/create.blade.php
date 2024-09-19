@extends('layouts.app')

@section('content')
    <h1>Novo Livro</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="post">
                @csrf

                <div class="mb-2">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="author" class="form-label">Autor</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" name="isbn" id="isbn" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="quantity_pages" class="form-label">Páginas</label>
                    <input type="number" name="quantity_pages" id="quantity_pages" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="edition" class="form-label">Edição</label>
                    <input type="text" name="edition" id="edition" class="form-control">
                </div>

                <div class="mb-4">
                    <label for="publisher" class="form-label">Editora</label>
                    <input type="text" name="publisher" id="publisher" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Voltar</a>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
