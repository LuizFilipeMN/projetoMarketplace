<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $lojaId = Auth::user()->loja_id;
            $produtos = Produto::where('loja_id', $lojaId)->get();
            return view('produtos.index', compact('produtos'));
        }

        return redirect()->route('login');
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric', 
        ]);
        
        $lojaId = Auth::user()->loja_id;

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'loja_id' => $lojaId,
            'foto_url' => '',
            'categoria' => $request->categoria,
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso.');
    }

    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
        ]);

        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'loja_id' => $produto->loja_id,
            'foto_url' => $produto->foto_url,
            'categoria' => $request->categoria,
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso.');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso.');
    }
}
