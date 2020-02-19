@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')
<div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th> ID  </th>
                    <th> Titulo  </th>
                    <th> Descrição  </th>
                    <th> Valor  </th>
                    <th> imagem  </th>
                    <th> Publicado  </th>
                    <th> Ação  </th>
                </tr>
            </thead>
            <tbody>

                @foreach($registros as $registro)
                <tr>
                    <td> {{ $registro->id }} </td>
                    <td> {{ $registro->titulo }} </td>
                    <td> {{ $registro->descricao }} </td>
                    <td> {{ "R$".number_format($registro->valor, 2, ',', '.') }} </td>
                    <td> <img  height="60" src="{{ asset($registro->imagem) }}" alt="{{ $registro->titulo }}" />  </td>
                    <td> {{ $registro->publicado }} </td>
                    <td>
                        <!-- Enviando o id em conjunto para poder editar -->
                        <a href="{{ route('admin.cursos.editar', $registro->id ) }}" class="btn deep-orange">Editar</a>
                        <a href="{{ route('admin.cursos.deletar', $registro->id ) }}" class="btn red">Deletar</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ route('admin.cursos.adicionar') }}" class="btn green center">Adicionar</a>
    </div>

</div>
@endsection
