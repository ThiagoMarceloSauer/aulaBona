<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('pages.produtos.index');
    }

     public function show($id, $nome = null, $categoria = null)
    {
        return view('pages.produtos.show', [
            'id' => $id,
            'nome' => $nome,
            'categoria' => $categoria
        ]);
    }

     public function create()
    {
        return view('pages.admin.produtos.create'); // criar este arquivo
    }

       public function store(Request $request)
    {
      
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        
        $caminhoImagem = $request->file('imagem')->store('products', 'public');

        
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imagem' => $caminhoImagem
        ]);

      
        return redirect()->route('admin.produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    
    
}

