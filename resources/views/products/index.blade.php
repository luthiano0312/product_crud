<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">editar</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <input type="submit" value="excluir">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('products.create') }}">cadastrar</a>
</body>
</html>