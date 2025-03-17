<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $usuario->nome }}" required>
        <br>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" id="sobrenome" value="{{ $usuario->sobrenome }}" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="{{ route('usuarios.index') }}">Voltar para a lista</a>
</body>
</html>
