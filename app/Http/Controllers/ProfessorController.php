<?php

namespace App\Http\Controllers;

use App\Models\Professores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProfessorController extends Controller
{
    public function index()
    {
         $professores = Professores::all();
         return view('professores.index',['professores'=>$professores]);
    }

    public function store(Request $request)
    {      
      DB::beginTransaction();
      try {
       $professores = new Professores();
       $professores->nome = $request->nome; 
       $professores->endereco = $request->endereco; 
       $professores->cpf = $request->cpf; 
       $professores->data_nascimento = Carbon::parse($request->data_nascimento)->format('Y-m-d');
       $professores->sexo = $request->sexo; 
       $professores->telefone = $request->telefone; 
       $professores->cep = $request->cep; 
       $professores->save();
       
       DB::commit();
       return redirect()->route('professores-index')->with('sucesso', 'Cadastro Concluido');
      
    }
    
    catch (\Exception $e) {
        DB::rollback(); 
          return redirect()->route('professores-index')->with('erro', 'Houve um erro no cadastro');
      }
    }

    
}
