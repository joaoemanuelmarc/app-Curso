<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AulaController extends Controller
{
    public function mostrarFormAula()
    {
        return view('cad_aula');
    }
    public function cadastroAula(Request $request)
    {
        $registrosAula = $request->validate([
            'idcurso'=> 'required',
            'tituloaula'=> 'required',
            'urlaula'=> 'required',
        ]);
        Aula::create($registrosAula);
        return Redirect::route('index');
    }
}
