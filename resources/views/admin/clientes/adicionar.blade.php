@extends('layout.site')

@section('titulo', 'Adicionar funcionario')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionando funcionario</h3>
        <div>
            <form action="{{ route('admin.funcionario.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('admin.funcionario._form')

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
