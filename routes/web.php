<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes (Capítulo 5 - Rotas, middlewares e controllers)
|--------------------------------------------------------------------------
|
| Todas as rotas apresentadas no material do curso.
|
*/

// Imagem 1 do Cap 5.1: Rota simples com GET
Route::get('/sobre-nos', function () {
    return 'Bem-vindo à Agência de Turismo Viagem Segura!';
});

// Imagem 2 do Cap 5.1: Rota com parâmetro dinâmico {cidade} e função ucfirst()
Route::get('/destino/{cidade}', function ($cidade) {
    return 'Exibindo pacotes disponíveis para a cidade de: ' . ucfirst($cidade);
});

// Imagem 4 do Cap 5.2: Rota delegando a ação para o PacoteController método listar
Route::get('/pacotes', [PacoteController::class, 'listar']);

// Imagem 5 do Cap 5.3: Rota protegida por middleware de autenticação
Route::get('/painel/cadastrar-pacote', [AdminController::class, 'create'])->middleware('auth');

// Atividade prática do Cap 5:
Route::get('/suporte', function () {
    return 'Bem-vindo à central de suporte ao viajante.';
});
