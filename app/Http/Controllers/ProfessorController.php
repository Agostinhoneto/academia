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

   public function create()
    {
        return view('professores.create');
    }
    
    public function store(Request $request)
    {      
  
      DB::beginTransaction();
      try {
       $professores = new Professores;
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
    /*
        public function storeAluno(Request $request)
        {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            
        ]);
        }
    */

    public function edit($id)
    {
      $professores = Professores::where('id',$id)->first();
      if(!empty($professores)){
            return view('professores.edit',['professores'=>$professores]);
        }
      else{
        return redirect()->route('professores-index');       
      } 
    }

    public function update(Request $request,$id)
    {
      $data = [
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'data_nascimento' => $request->data_nascimento,
        'endereco' => $request->endereco,
        'sexo' => $request->sexo,
        'telefone' => $request->telefone,
        'cep' => $request->cep,
      ];

      Professores::where('id',$id)->update($data);
      return redirect()->route('professores-index');      
    }

    public function destroy($id)
    {
      //dd($id);
      Professores::where('id',$id)->delete();
      return redirect()->route('professores-index');   
    }

}
