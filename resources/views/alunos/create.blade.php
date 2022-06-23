@extends('layouts.app')
@section('content')
@section('title','Criação')
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <div class="container">
    <br>
    <br>
    <h1>Criar novo Aluno</h1>
    <br>
    <hr>
    <form action="{{route('alunos-store')}}" method="POST">
      @csrf
      <div class="form-group">
        <br>
        <div class="col-sm-6 col-form-label">
          <label for="nome">Nome: </label>
          <input type="text" class="form-control" name="nome"  placeholder="Digite um Nome...">
        </div>
        <br>
        <div class="col-sm-6 col-form-label">
          <label for="nome">Endereço: </label>
          <input type="text" class="form-control" name="sexo" placeholder="Endereço.">
        </div>
        <br>
        <div  class="col-sm-4 col-form-label">
          <label for="nome">CPF: </label>
          <input type="text" class="form-control" name="cpf" placeholder="CPF.">
        </div>
        <br>
        <label for="Customization">Data Nascimento</label>
        <div  class="col-sm-2 col-form-label" class="md-form md-outline input-with-post-icon datepicker" id="customDays">
            <input placeholder="Data de Nascimento"  name="data_nascimento" type="text" id="datepicker" class="form-control">
            <i class="fas fa-calendar input-prefix" tabindex=0></i>
        </div>
        <br>
        <div class="col-sm-2 col-form-label">
          <label for="nome">Sexo:</label>
          <br>
          <input type="text" class="form-control" name="sexo" placeholder="Sexo.">
        </div>
        <br>
        <div class="col-sm-2 col-form-label">
          <label for="nome">Telefone: </label>
          <br>
          <input type="text" class="form-control" name="sexo" placeholder="Telefone.">
        </div>
        <br>
        <div class="col-sm-2 col-form-label">
          <label for="nome">CEP: </label>
          <br>
          <input type="text" class="form-control" name="sexo" placeholder="CEP.">
        </div>
        <br>
        <div class="form-group">
          <input  type="submit" name="submit" class="btn btn-success">
        </div>
      </div>
    </form>
  </div>
@endsection