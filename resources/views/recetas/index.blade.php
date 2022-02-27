@extends('layouts.app')

@section('content')
<h1>Recetas</h1>

@foreach ($recetas as $receta )
    <li>{{$receta}}</li>
@endforeach

<h2>categoria</h2>

@foreach ($categorias as $categoria )
    <li>{{$categoria}}</li>
@endforeach

@endsection
