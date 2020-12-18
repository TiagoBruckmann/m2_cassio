@extends('layout.site')

@section('titulo', 'Clientes')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de funcionario</h3>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Telefone</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->clientes }}</td>
                            <td>{{ $registro->fone }}</td>
                            <td>
                                <a class="btn deep-black" onclick="editar()" href="{{ route('admin.funcionario.editar', $registro->id) }}">Editar</a>
                                <a class="btn deep-black" onclick="deletar()" href="{{ route('admin.funcionario.deletar', $registro->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn dark" href="{{ route('admin.funcionario.adicionar') }}">Adicionar</a>
        </div>
    </div>
    <script>
        function editar(){
            alert('Deseja mesmo editar esse cliente?')
        }

        function deletar(){
            alert('Deseja mesmo deletar esse cliente?')
        }
    </script>

<style>

    button {
        margin-bottom: 80px;
    }

</style>

@endsection