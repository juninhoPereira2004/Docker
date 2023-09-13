@extends('layouts.app')

@section('title', 'Criação')

@section('content')

        
<div class="container mt-5">
  <h1>Editar o Jogo</h1>
  <hr>
  <br>
  <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="POST">
  @csrf
  @method('PUT')
    <div class="form-group">
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite um Nome de Jogo...">
      </div>

      <br>

      <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite uma Categoria para o Jogo...">
      </div>

      <br>

      <div class="form-group">
        <label for="ano_criacao">Ano De Criação</label>
        <input type="text" class="form-control" name="ano_criacao" value="{{ $jogos->ano_criacao }}" placeholder="Ano De Criação...">
      </div>

      <br>

      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite um Valor...">
      </div>

      <br>

      <div class="form-group">
        <input type="submit" name="submit" value="Atualizar" class="btn btn-success" value="cadastrar" onclick="return confirm('Editado com Sucesso')">
      </div>
    </div>
  </form>
</div>
       
@endsection