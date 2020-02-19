@extends('layout.site')

@section('titulo','Editar')


@section('conteudo')
<div class="container">
    <h3 class="center">Editando Curso</h3>
    <div class="row">
        <form class="" action="{{ route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            <!-- incluindo form (reutilizacao de código) -->
            @include('admin.cursos._form')

            <button class="btn green">Atualizar</button>
        </form>
    </div>


</div>
@endsection
