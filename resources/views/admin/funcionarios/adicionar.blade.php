@extends('layout.site')

@section('titulo', 'Adicionar funcionarios')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionando funcionarios</h3>
        <div>
            <form action="{{ route('admin.funcionarios.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('admin.funcionarios._form')

                <button class="btn green">Salvar</button>
            </form>
        </div>
    </div>

<style>

    button {
        margin-bottom: 80px;
    }

</style>

@endsection
