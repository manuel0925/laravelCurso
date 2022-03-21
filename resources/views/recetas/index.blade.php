@extends('layouts.app')

@section("botones")

    <a href="{{route('recetas.create')}}" class="btn btn-primary text-white">Crear receta</a>

@endsection


@section('content')
<h5 class="text-center mb-5">administracion recetas</h5>
<div class="col-md-10 mx-auto bg-white p-3">
    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <td>Titulo</td>
                <td>Categoria</td>
                <td>Acciones</td>
            </tr>

        </thead>
        <tbody>
            <tr>
                <td>pizza</td>
                <td>pizzas</td>
                <td>

                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection
