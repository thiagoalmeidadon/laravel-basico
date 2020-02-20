@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')
<div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
    @foreach($cursos as $curso)

           <div class="col s12 m3">
             <div class="card">
               <div class="card-image">
                 <img src="{{ asset($curso->imagem) }}" />

               </div>
               <div class="card-content">
                 <h4> {{ $curso->titulo }} </h4>
                 <p> {{ $curso->descricao }} </p>
               </div>
               <div class="card-action">
                 <a href="#">{{ "R$". number_format($curso->valor, 2, ',', '') }}</a>
               </div>
             </div>
           </div>

     @endforeach
     </div>

     <div class="row" align="center">
         <!--  Exibindo os links de paginacao -->
         {{ $cursos->links() }}
     </div>
</div>


@endsection
