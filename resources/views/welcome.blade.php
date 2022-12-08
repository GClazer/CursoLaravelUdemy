<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <h1>Home</h1>

    <ul>
        <a href="{{ route('sobre') }}">
            <li>Sobre</li>
        </a>
        <a href="{{ route('contato') }}">
            <li>Contato</li>
        </a>
        <a href="{{ route('app.clientes') }}">
            <li>Clientes</li>
        </a>
        <a href="{{ route('app.fornecedores') }}">
            <li>Fornecedores</li>
        </a>
        <a href="{{ route('app.produtos') }}">
            <li>Produtos</li>
        </a>
    </ul>
</body>
</html>