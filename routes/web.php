<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/board', [DashboardController::class, 'board']);
//

Route::resource('tarefa', TarefaController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('projeto', ProjetoController::class);
