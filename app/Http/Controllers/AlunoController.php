<?php

use app\Http\Request\AlunoStoreRequest;
namespace App\Http\Controllers;
use App\Models\Aluno;
use Illuminate\Http\Request;


class AlunoController extends Controller
{
    public function index()
    {
        
        $alunos = Aluno::all();
      
        return view('alunos.index',['alunos'=>$alunos]);
    }
 /*
    public function store(AlunoStoreRequest $request)
    {      
        Aluno::create($request->all());
        return redirect()->route('alunos-index');
    }
*/
    public function storeAluno(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'categoria' => 'required',
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
        'categoria' => $request->categoria,
        'ano_criacao' => $request->ano_criacao,
        'valor'   => $request->valor,
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
