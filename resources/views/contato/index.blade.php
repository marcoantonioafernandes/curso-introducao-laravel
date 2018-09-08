
@extends('layout.site')

<!--Alterando variável do template-->
@section('titulo', 'Contatos')

@section('conteudo')
<h3>Essa é a view index do Contato</h3>
 @foreach ($contatos as $contato)
    <p>{{ $contato->nome }}</p>
@endforeach
@endsection




