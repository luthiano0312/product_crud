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
            </tr>
        </thead>

        <tbody>
            @foreach( $products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->amount }}</td>
                    <td>${{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>