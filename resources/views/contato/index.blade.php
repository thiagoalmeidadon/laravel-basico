@extends('layout.site')

@section('titulo','Contatos')


@section('conteudo')

	<h3> Index php </h3>

	@foreach($contatos as $contato)
		{{ $contato->nome  .  $contato->email }} <br />
	@endforeach

		<!-- exibir o nome vindo do Model método listar  -->
		{{ $rec }} <br />


@endsection
