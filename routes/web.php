<?php

use App\Http\Controllers\AulaController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AppController;


Route::get('/',[CategoriaController::class,'index'])->name('index');

Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("form-cadastro-categoria");
//rota para cadastrar categoria
Route::post('/cadcategoria',[CategoriaController::class,'cadastroCat'])->name("cadastro-categoria");

Route::get('/cadcurso',[CursoController::class,'mostrarFormCurso'])->name("form-cadastro-curso");
//rota para cadastrar categoria
Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("cadastro-curso");

Route::post('/cadcurso',[CursoController::class,'cadastroCurso'])->name("manipula-curso");


Route::get('/cadaula',[AulaController::class,'mostrarFormAula'])->name("form-cadastro-aula");
//rota para cadastrar categoria
Route::post('/cadaula',[AulaController::class,'cadastroAula'])->name("cadastro-aula");
//rotas para manipular categoria
Route::get('/manipula_categoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-categoria");

//rota para buscar por nome da categoria
Route::get('/manipulanomecategoria',[CategoriaController::class,'BuscarCategoriaNome'])->name("buscar-categoria-nome");

//rota para deletar a categoria
Route::delete('/deletarcategoria/{registrosCategoria}',[CategoriaController::class,'DeletarCategoria'])->name('deletar-categoria');


//rotas para mostrar as categoria
Route::get('/alterar-categoria/{registrosCategoria}',[CategoriaController::class,'MostrarAlterarCategoria'])->name('alterar-categoria');
Route::put('/alterarbancocategoria/{registrosCategoria}',[CategoriaController::class,'AlterarBancoCategoria'])->name('alterar-banco-categoria');

Route::get('/manipula-categoria',[CategoriaController::class,'mostrarManipulaCategoria'])->name("manipula-aula");
