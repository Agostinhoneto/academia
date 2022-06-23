<?php

use app\Http\Request\AlunoStoreRequest;
namespace App\Http\Controllers;
use App\Models\Aluno;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AlunoController extends Controller
{
    public function index()
    {
        
        $alunos = Aluno::all();
      
        return view('alunos.index',['alunos'=>$alunos]);
    }
    
    public function create()
    {
     
       return view('alunos.create');
    }


    public function store(Request $request)
    {      
       $aluno = new Aluno;
       $aluno->nome = $request->nome; 
       $aluno->endereco = $request->endereco; 
       $aluno->cpf = $request->cpf; 
       $aluno->data_nascimento = Carbon::parse($request->data_nascimento)->format('Y-m-d');
       $aluno->sexo = $request->sexo; 
       $aluno->telefone = $request->telefone; 
       $aluno->cep = $request->cep; 
     
       $aluno->save();

       return redirect()->route('alunos-index');
    }

    public function storeAluno(Request $request)
    {
      $request->validate([
        'nome' => 'required',
        'cpf' => 'required',
        
      ]);
    }

    public function edit($id)
    {
      $alunos = Aluno::where('id',$id)->first();
      if(!empty($alunos)){
            return view('alunos.edit',['alunos'=>$alunos]);
        }
      else{
        return redirect()->route('alunos-index');       
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

      Aluno::where('id',$id)->update($data);
      return redirect()->route('alunos-index');      
    }

    public function destroy($id)
    {
      //dd($id);
      Aluno::where('id',$id)->delete();
      return redirect()->route('alunos-index');   

    }
}
