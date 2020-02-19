@extends('layout.site')

@section('titulo','Cursos')


@section('conteudo')
<div class="container">
    <h3 class="">Lista de cursos</h3>

    @foreach($cursos as $curso)
        <div class="row">
           <div class="col s12 m4">
             <div class="card">
               <div class="card-image">
                 <img src="{{ asset($curso->imagem) }}">

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
         </div>
     @endforeach

     </div>
     <div class="row" align="center">
         <!--  Exibindo os links de paginacao -->
         {{ $cursos->links() }}
     </div>


@endsection
