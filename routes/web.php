<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ContatoController::class, "index"]);
Route::post("/adicionar", [ContatoController::class, "adicionar"]);
Route::get("/editar/{id}", [ContatoController::class, "editar"]);
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);
Route::get("/excluir/{id}", [ContatoController::class, "excluir"]);