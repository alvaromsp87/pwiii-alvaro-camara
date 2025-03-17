<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar Novo Usuário</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" required>
        <br>
        <button type="submit">Criar</button>
    </form>
    <br>
    <a href="{{ route('usuarios.index') }}">Voltar para a lista</a>
</body>
</html>
