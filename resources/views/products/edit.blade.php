@extends('layouts.app')

@section('title', 'edição')

@section('headerTitle', 'edição de produtos')

@section('content')

    @if (session('error'))
        <div id="errorMessage">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="post" id="formCreate">
        @csrf   
        @method('put')

        <h1 id="formTitle">Atualizar</h1>

        <div class="formContainer">
            <label for="name">Nome: </label>
            <input type="text" name="name" class="input" value="{{ $product->name }}">
        </div>

        <div class="formContainer">
            <label for="amount">Quantidade: </label>
            <input type="number" name="amount" class="input" value="{{ $product->amount }}">
        </div>

        <div class="formContainer">
            <label for="price">Preço: </label>
            <input type="number" name="price" class="input" value="{{ $product->price }}">
        </div>

        <div id="buttonContainer">
            <div id="cancelContainer">
                <a href="{{ route('products.index') }}" id="cancel">Cancelar</a>
            </div>

            <input type="submit" value="Atualizar" id="create">
        </div>
    </form>
    
@endsection


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualização</title>
</head>
<body>
    <h1>edição de produtos</h1>

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nome: </label>
        <input type="text" name="name" value="{{ $product->name }}">

        <label for="amount">Quantidade: </label>
        <input type="text" name="amount" value="{{ $product->amount }}">

        <label for="price">Preço: </label>
        <input type="text" name="price" value="{{ $product->price }}">

        <input type="submit" valeu="atualizar">
    </form>
</body>
</html> -->