<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/board', [DashboardController::class, 'board']);
//
Route::resource('tarefa', TarefaController::class);
