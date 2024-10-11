@extends('layout')
@section('content')

    <div class="container mt-5">
        <h2>Alterar Livro</h2>
        <form method="post" action="{{route('altera-livro',$registrosLivros->idLivro) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nomeLivro">Nome do Livro</label>
                <input type="text" class="form-control" id="nomeLivro" name="nomeLivro" value="{{$registrosLivros->nomeLivro}}" placeholder="Digite o nome do livro" required>
            </div>
            <div class="form-group">
                <label for="edicaoLivro">Numero da Edição</label>
                <input type="text" class="form-control" id="dataEvento" name="edicaoLivro" value="{{$registrosLivros->edicaoLivro}}" placeholder="Digite a edição do livro" required>
            </div>
            <div class="form-group">
                <label for="editoraLivro">Editora</label>
                <input type="text" class="form-control" id="editoraLivro" name="editoraLivro" value="{{$registrosLivros->editoraLivro}}" placeholder="Digite a editora do livro" required>
            </div>
            <div class="form-group">
                <label for="autorLivro">Autor do livro</label>
                <input type="text" class="form-control" id="autorLivro" name="autorLivro" value="{{$registrosLivros->autorLivro}}" placeholder="Digite o nome do autor do livro" required>
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>

@endsection
