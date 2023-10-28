<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function mostrarFormCurso()
    {
        return view('cad_curso');
    }
    public function cadastroCurso(Request $request)
    {
        $registrosCurso = $request->validate([
            'nomecurso'=> 'string|required',
            'cargahoraria'=> 'required',
            'idcategoria'=> 'required',
            'valor'=>'required'
        ]);
        Curso::create($registrosCurso);
        return Redirect::route('index');
    }
    
}
