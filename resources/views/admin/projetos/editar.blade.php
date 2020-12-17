@extends('layout.site')

@section('titulo', 'Editar projeto')

@section('conteudo')
    <div class="container">
        <h3 class="center">editando o projeto</h3>
        <div class="row">
            <form class="" action="{{ route('admin.projetos.atualizar', $registro->id) }}" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                @include('admin.projetos._form')

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