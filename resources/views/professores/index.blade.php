@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container mt-5"> 
  <table class="table">
    <thead>
      <h1>Listagem de Professores</h1>
      <hr>
      <br>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Endereço</th>
        <th scope="col">CPF</th>  
        <th scope="col">Data Nascimento</th>
        <th scope="col">Sexo</th>
        <th scope="col">telefone</th>
        <th scope="col">cep</th>
      </tr>
    </thead>
    <tbody>
        
    </tbody>
  </table>
  <br>
  <a href="{{route('alunos-create')}}" class="btn btn-primary">Add Novo Aluno</a> 
  
</div>  
@endsection