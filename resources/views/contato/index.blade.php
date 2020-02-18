<h3> Index php </h3>

@foreach($contatos as $contato)
	{{ $contato->nome  .  $contato->email }} <br />
@endforeach