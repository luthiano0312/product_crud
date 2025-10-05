@extends('layouts.app')

@section('title', 'cadastro')

@section('headerTitle', 'Cadastro de produtos')

@section('content')

    @if (session('error'))
        <div id="errorMessage">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post" id="formCreate">
        @csrf   

        <h1 id="formTitle">Cadastrar</h1>

        <div class="formContainer">
            <label for="name">Nome: </label>
            <input type="text" name="name" class="input">
        </div>

        <div class="formContainer">
            <label for="amount">Quantidade: </label>
            <input type="number" name="amount" class="input">
        </div>

        <div class="formContainer">
            <label for="price">Preço: </label>
            <input type="number" name="price" class="input">
        </div>

        <div id="buttonContainer">
            <div id="cancelContainer">
                <a href="{{ route('products.index') }}" id="cancel">Cancelar</a>
            </div>

            <input type="submit" value="Cadastrar" id="create">
        </div>
    </form>
    
@endsection