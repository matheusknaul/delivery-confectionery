@extends('layouts.main')

@section('title', 'Cadastrar Produto')

@section('content')

<div id="product-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre seu produto</h1>
    <form action="/product" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do produto:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do produto">
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai no produto?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">O produto é o especial da categoria?</label>
            <select name="special" id="special" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Preço:</label>
            <input type="number" min="1" step="any" class="form-control" id="price" name="price">
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Produto">
    </form>
</div>

@endsection
