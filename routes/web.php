<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::prefix('/admin')->group(function(){
    route::get('/login', [AdminController::class, 'admin'])->name('admin');
});




Route::get('/', [ProdutoController::class, 'lista'])->name();

Route::get('/', function () {
    return 'Home';
})->name('index');

route::get('/produtos', function(){
    return 'Produtos';
});

route::get(
    '/produtos/{produto_id}/{nome}/{categoria}',
    function(
        int $produto_id,
        string $nome,
        string $categoria)
        { echo ' Id_produto: ' . $produto_id. ' Nome: ' . $nome. ' Categoria: ' . $categoria; 
    })->where('produto_id','[0+9]+');

route::get('/cadastro', function(){
    echo 'cadastrar';
});

route::get('/login', function(){
    echo 'login';
});

route::get('/sobre', function(){
    
    echo 'sobre';
})->name('sobre');

route::get('/contato', function(){});

route::prefix('admin')->group(function(){
    route::get('/login',function(){
        echo 'login adm';
    });
    route::get('/dashbord', function(){
        echo 'painel principal';
    })->name('admin.dashbord');
    route::get('/clientes', function(
        int $id_cliente){
        echo 'lista de clientes';
    })->where('id_cliente','[0+9]+');
    route::get('/fornecedores',function(){
        echo 'lista de fornecedores';
    });
    route::get('/produtos/{slug}',function(){
        echo 'lista de produtos cadastrados';
    })->where('slug','[A-Za-z0-9\-]+');

});
