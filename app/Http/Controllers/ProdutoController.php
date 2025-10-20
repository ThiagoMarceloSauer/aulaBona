<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
  
public function index()
{
    $produtos = Produto::all(); 
    return view('pages.produtos.index', compact('produtos'));
}


public function show($id)
{
    
    $produto = Produto::findOrFail($id);

  
    return view('pages.produtos.show', compact('produto'));
}

     public function create()
    {
        return view('pages.admin.produtos.create'); 
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

