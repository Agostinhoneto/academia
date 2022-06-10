@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container mt-5"> 
  <table class="table">
    <thead>
      <h1>Listagem de Jogos</h1>
      <hr>
      <br>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Data de Nascimento</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($alunos as $aluno )
      <tr>
        <th>{{$aluno->id}}</th>
        <th>{{$aluno->nome}}</th>
        <th>{{$aluno->cpf}}</th>
        <th>{{ date('d/m/Y',strtotime($aluno->data_nascimento))}}</th>
        <th>
          <a href="{{ route('alunos-edit', ['id'=>$aluno->id])}}">Editar</a>
          <form action="{{route('alunos-destroy', ['id'=>$aluno->id]) }}" method="POST">
            @csrf
            @method('delete') 
            <button type="submit" class="btn btn-danger">Deletar</button>
          </form>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
  <br>
  <a href="{{route('alunos-create')}}" class="btn btn-primary">Add Novo Aluno</a> 
  
</div>  
@endsection