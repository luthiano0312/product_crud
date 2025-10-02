<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualização</title>
</head>
<body>
    <h1>edição de produtos</h1>

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
</html>