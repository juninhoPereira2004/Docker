@extends('layouts.app')

@section('title', 'Listagem dos Jogos')

@section('content')

    <script>
        function deletar(id) {
            Swal.fire({
                title: 'Deseja deletar isso?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'sim delete isso!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: '{{ route('jogos-destroy') }}',
                        data: ({
                            '_token': '{{ csrf_token() }}',
                            'id': id,
                        }),
                        success: function(res) {
                            Swal.fire(
                                'Deletado!',
                                'Seu registro foi deletado!',
                                'success'
                            )

                            $('#linha_'+id).hide(500)
                        }
                    });
                }
            })
        };
    </script>

    @if (Session::has('message'))
        <script defer>
            Swal.fire(
                'Sucesso',
                "{{ Session::get('message') }}",
                'success'
            )
        </script>
    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <h1>Listagem de Jogos</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('jogos-create') }}" class="btn btn-success">Novo Jogo</a>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">categoria</th>
                    <th scope="col">Ano de criação</th>
                    <th scope="col">Valor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($jogos as $jogo)
                    <tr id="linha_{{ $jogo->id }}">
                        <th>{{ $jogo->id }}</th>
                        <th>{{ $jogo->nome }}</th>
                        <th>{{ $jogo->categoria }}</th>
                        <th>{{ $jogo->ano_criacao }}</th>
                        <th>{{ $jogo->valor }}</th>

                        <th class="d-flex">
                            <a href=" {{ route('jogos-edit', ['id' => $jogo->id]) }} " class="btn btn-primary me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </a>
                            
                            <button type="button" class="btn btn-danger" onclick='deletar({{ $jogo->id }})'> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg></button>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
