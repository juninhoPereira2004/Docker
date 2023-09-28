@extends('layouts.app')

@section('title', 'Criação')

@section('content')

<div class="container mt-5">
  <h1>Crie um novo jogo</h1>
  <hr>
  <br>
  <form id="meuFormulario" action="{{ route('jogos-store') }}" method="POST">
  @csrf
    <div class="form-group">
      <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" placeholder="Digite um Nome de Jogo...">
      </div>

      <br>

      <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" name="categoria" placeholder="Digite uma Categoria para o Jogo...">
      </div>

      <br>

      <div class="form-group">
        <label for="ano_criacao">Ano De Criação</label>
        <input type="text" class="form-control" name="ano_criacao" placeholder="Ano De Criação...">
      </div>

      <br>

      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" class="form-control" name="valor" placeholder="Digite um Valor...">
      </div>

      <br>

      <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary" value="Criar" >
      </div>
    </div>
  </form>

  <script>
    document.getElementById("meuFormulario").addEventListener("submit", function (event) {
        var nomeCampo = document.querySelector("input[name='nome']").value;
        var categoriaCampo = document.querySelector("input[name='categoria']").value;
        var anoCriacaoCampo = document.querySelector("input[name='ano_criacao']").value;
        var valorCampo = document.querySelector("input[name='valor']").value;

        if (nomeCampo.trim() === "" || categoriaCampo.trim() === "" || anoCriacaoCampo.trim() === "" || valorCampo.trim() === "") {
            event.preventDefault();
            alert("Todos os campos devem ser preenchidos.");
        }
    });
</script>

  @if(Session::has('error'))
      <script>
        Swal.fire({
        title: 'Jogo Existente',
        text: "O Jogo ja esta Cadastrado",
        icon: 'error',
        confirmButtonText: 'OK'
        });
      </script>
  @endif
</div>
       
@endsection

