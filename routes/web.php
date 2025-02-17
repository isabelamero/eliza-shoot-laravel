<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ImagensController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [GaleriaController::class, 'index']);

Route::get('/galeria', [GaleriaController::class, 'index']);

Route::get('/imagens', [ImagensController::class, 'index']);

Route::get('/imagens/novo', [ImagensController::class, 'create']);

Route::get('/imagens/editar/{id}', [ImagensController::class, 'edit']);

Route::post('/imagens/salvar', [ImagensController::class, 'store']);

Route::delete('/imagens/excluir', [ImagensController::class, 'destroy']);

Route::put('/imagens/alterar', [ImagensController::class, 'update']);

// Rotas para o Portfólio
Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/portfolio/novo', [PortfolioController::class, 'create']);

Route::get('/portfolio/editar/{id}', [PortfolioController::class, 'edit']);

Route::post('/portfolio/salvar', [PortfolioController::class, 'store']);

Route::delete('/portfolio/excluir', [PortfolioController::class, 'destroy']);

Route::put('/portfolio/alterar', [PortfolioController::class, 'update']);

// Rotas para "About" e "Contato"
Route::get('/about', function () {
    return view('about');
});

Route::get('/contato', function () {
    return view('contato');
});
