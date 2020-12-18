@extends('layout.site')

@section('titulo', 'Adicionar cliente')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionando Cliente</h3>
        <div>
            <form action="{{ route('admin.clientes.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('admin.clientes._form')

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
