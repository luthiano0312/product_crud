<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>

    @if (session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <label for="name">Nome: </label>
        <input type="text" name="name">

        <label for="amount">Quantidade: </label>
        <input type="text" name="amount">

        <label for="price">Preço: </label>
        <input type="text" name="price">

        <input type="submit" valeu="cadastrar">
    </form>
</body>
</html>