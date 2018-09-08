
@extends('layout.site')

<!--Alterando variável do template-->
@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    <h3 class = "center">Lista de cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->curso }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>
                            <!-- asset -> Ferramenta do Laravel para definir corretamente o endereço da imagem -->
                            <img width="90px" src="{{ asset($registro->imagem) }}" alt="{{ $registro->curso }}">
                        </td>
                        <td>{{ $registro->publicado }}</td>
                        <td>
                            <a class="btn deep-green" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.cursos.deletar', $registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <div class="row">
        <a class="btn deep-green" href="{{ route('admin.cursos.adicionar')}}">Adicionar</a>

    </div>
</div>


@endsection




