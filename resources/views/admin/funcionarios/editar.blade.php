@extends('layout.site')

@section('titulo', 'Editar funcionario')

@section('conteudo')
    <div class="container">
        <h3 class="center">editar o funcionario</h3>
        <div class="row">
            <form class="" action="{{ route('admin.funcionarios.atualizar', $registro->id) }}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.funcionarios._form')

                <button class="btn green">Atualizar</button>
            
            </form>
        </div>
    </div>

<style>

    button {
        margin-bottom: 80px;
    }

</style>
@endsection