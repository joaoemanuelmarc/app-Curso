<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //abri o formulario de cadastro
    public function mostrarFormCat(){
        return view('cad_categoria');
    }

    public function index(){
        return view('index');
    }

public function cadastroCat(Request $request){
    //verifica se exiate algo na variavel nomecategoria.
$registrosCat = $request->validate([
    'nomecategoria'=> 'string|required'
]);

//esta linha é que grava o registro no banco.
 Categoria::create($registrosCat);

 return Redirect::route('index');

}
public function mostrarManipulaCategoria(){
    $registrosCategoria = Categoria::All();

    return view('manipula_categoria',['registrosCategoria' => $registrosCategoria]);
}

}
