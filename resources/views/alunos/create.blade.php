@extends('layouts.app')
@section('content')
@section('title','Criação')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <div class="container">
    <br>
    <h1>Criar novo Jogo</h1>
    <hr>
    <form action="{{route('jogos-store')}}" method="POST">
      @csrf
      <div class="form-group">
        <div class="form-group">
          <label for="nome">Nome: </label>
          <input type="text" class="form-control" name="nome"  placeholder="Digite um Nome...">
        </div>
        <br>
        <div class="form-group">
          <label for="nome">CPF: </label>
          <input type="text" class="form-control" name="cpf" placeholder="CPF.">
        </div>
        <br>
        <div class="form-group">
          <label for="nome">Cpf </label>
          <input type="number" class="form-control" name="data_nascimento" placeholder="Digite Data de Nascimento...">
        </div>
   
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
@endsection