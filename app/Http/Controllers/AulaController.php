<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Curso;
use App\Models\Categoria;
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
    public function mostrarManipulaAula(){
        $registrosAula = Aula::All();
    
        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }
    
    public function DeletarAula(Aula $registrosAula)
    {
    $registrosAula->delete();
    return Redirect::back();
    }
}
