@extends('layouts.app')
@section('content')
@section('title','Edição')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container">
      <br>
      <h1>Editar Aluno</h1>
        <hr>
        <form action="{{route('alunos-update',['id'=>$alunos->id]) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <div class="form-group">
              <label for="nome">Nome: </label>
              <input type="text" class="form-control" name="nome" value="{{$alunos->nome}}" placeholder="Digite um Nome...">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">CPF: </label>
              <input type="text" class="form-control" name="cpf" value="{{$alunos->cpf}}" placeholder="Digite o CPF">
            </div>
            <br>
            <div class="form-group">
              <label for="nome">Data de Nascimento: </label>
              <input type="date" class="form-control" name="data_nascimento" value="{{date('d/m/Y',strtotime($alunos->data_nascimento))}}" placeholder="Digite Data de Nascimento">
            </div>
            <br>
          
            <br>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-success">
            </div>
          </div>
        </form>
    </div>
@endsection