<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UsuarioController;



Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/cadastro', [UsuarioController::class, 'cadastro']);
Route::get('/usuarios/cadastro/{id}', [UsuarioController::class, 'cadastro']);
Route::post('/usuarios/salvar', [UsuarioController::class, 'salvar']);
Route::get('/usuarios/remover/{id}', [UsuarioController::class, 'remover']);
