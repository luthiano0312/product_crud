@extends('layouts.app')

@section('title', 'produtos')

@section('headerTitle', 'Listagem de produtos')

@section('content')
    <div id="buttonAndMessage">
        @if (session('success'))
            <div id="message">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('products.create') }}" id="button">cadastrar</a>
    </div>

    <table id="table">
        <thead id="thead">
            <tr class="tr">
                <th class="td">ID</th>
                <th class="td">Nome</th>
                <th class="td">Quantidade</th>
                <th class="td">Preço</th>
                <th class="td">Ação</th>
            </tr>
        </thead>

        <tbody id="tbody">
            @foreach( $products as $product)
            <tr class="tr">
                <td class="td">{{ $product->id }}</td>
                <td class="td">{{ $product->name }}</td>
                <td class="td">{{ $product->amount }}</td>
                <td class="td">${{ $product->price }}</td>
                <td class="td" id="action">
                    <a href="{{ route('products.edit', $product->id) }}" id="editButton">Editar</a>

                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('delete')

                        <input type="submit" value="Excluir" id="deleteButton">
                    </form>                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection