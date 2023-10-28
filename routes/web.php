<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');

Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
//rota para cadastrar categoria
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
//rota para cadastrar categoria
Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("cadastro-curso");

Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
//rota para cadastrar categoria
Route::post('/cadaula',[AulaController::class,'cadastroAula'])->name("cadastro-aula");
//rotas para manipular categoria
Route::get('/manipulacategoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-categoria");

//rotas para alterar categoria
Route::get('/alterar-categoria/{registrosCategoria}',[CategoriaController::class,'MostrarAlterarCategoria'])->name('alterar-categoria');


