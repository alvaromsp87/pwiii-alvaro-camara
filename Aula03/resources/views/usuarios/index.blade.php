<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <a href="{{ route('usuarios.create') }}">Novo Usuário</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->sobrenome }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
