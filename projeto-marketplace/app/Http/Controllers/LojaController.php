<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loja;

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
            'cnpj' => 'required|string|max:20',
            'senha' => 'required|string|min:6',
        ]);

        $loja = new Loja($validatedData);
        $loja->senha = bcrypt($request->senha);
        $loja->save();
        return redirect()->route('cadastro.create')->with('success', 'Cadastro realizado com sucesso!');
    }
}