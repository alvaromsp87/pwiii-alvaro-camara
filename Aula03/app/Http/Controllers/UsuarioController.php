<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Exibe todos os usuários
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // Exibe o formulário para criar um novo usuário
    public function create()
    {
        return view('usuarios.create');
    }

    // Armazena um novo usuário no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.index');
    }

    // Exibe o formulário para editar um usuário existente
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    // Atualiza um usuário no banco
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index');
    }

    // Exclui um usuário
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}
