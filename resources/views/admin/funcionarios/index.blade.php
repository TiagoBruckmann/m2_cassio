@extends('layout.site')

@section('titulo', 'funcionarios')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de funcionarios</h3>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Funcionario</th>
                        <th>Telefone</th>
                        <th>Admissão</th>
                        <th>Salario</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->nome }}</td>
                            <td>{{ $registro->fone }}</td>
                            <td>{{ $registro->dt_admissao }}</td>
                            <td>{{ $registro->vl_salario }}</td>
                            <td>
                                <a class="btn deep-black" onclick="editar()" href="{{ route('admin.funcionarios.editar', $registro->id) }}">Editar</a>
                                <a class="btn deep-black" onclick="deletar()" href="{{ route('admin.funcionarios.deletar', $registro->id) }}">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn dark" href="{{ route('admin.funcionarios.adicionar') }}">Adicionar</a>
        </div>
    </div>
    <script>
        function editar(){
            alert('Deseja mesmo editar esse funcionario?')
        }

        function deletar(){
            alert('Deseja mesmo deletar esse funcionario?')
        }
    </script>

<style>

    button {
        margin-bottom: 80px;
    }

</style>

@endsection