@extends('layout.site')

@section('titulo','Adicionar')


@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar Curso</h3>
    <div class="row">
        <form class="" action="{{ route('admin.cursos.adicionar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- incluindo form (reutilizacao de código) -->
            @include('admin.cursos._form')

            <button class="btn green">Salvar</button>
        </form>
    </div>


</div>
@endsection
