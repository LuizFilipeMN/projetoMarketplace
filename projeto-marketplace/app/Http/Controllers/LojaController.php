<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Loja;
use App\Models\user;

class LojaController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'cnpj' => 'required_if:tipo_usuario,vendedor|string|max:20',
            'password' => 'required|string|min:6',
        ]);
        $usuario = new user($validatedData);
        $usuario->password = bcrypt($request->password);
        $usuario->tipo = $request->tipo_usuario;
        $usuario->save();
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
