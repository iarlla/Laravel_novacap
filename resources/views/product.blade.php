@extends('layouts.main')

@section('title', 'Novacap')
@section('content')

<a href="/">Voltar ao inicio</a>

@if($id != null)
    <p><br>Exibindo produto id: {{ $id }}</p>
@endif

@endsection
