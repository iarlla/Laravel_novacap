@extends('layouts.main')

@section('title', 'Novacap')
@section('content')

<h1>Tela de Produtos<br></h1>

@if($busca != '')
    <p>O usuário está buscando por: {{$busca}}</p>
@endif
<a href="/"><br>Voltar ao inicio</a>

@endsection
