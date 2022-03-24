@extends('layouts.app')

@section("botones")
    <a  href="{{route('recetas.index')}}" class="btn btn-primary text-white">Volver</a>
@endsection


@section('content')
<h5 class="text-center mb-5">crear recetas</h5>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form method="post" action="{{route('recetas.store')}}">
            @csrf
            <div class="form-group pb-3">
                <label for="titulo">Titulo receta</label>

                <input
                    type="text"
                    name="titulo"
                    id="titulo" placeholder="Titulo receta"
                    class="form-control @error('titulo') is-invalid @enderror"
                    value="{{old("titulo")}}"
                >

                @error('titulo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group pb-3">
                <label for="categoria"> Categoria</label>

                <select
                    name="categoria"
                    id="categoria"
                    class="form-control
                    @error('categoria')
                        is-invalid
                    @enderror">

                    <option value="">--seleccione--</option>
                    @foreach ($categorias as $id=>$categoria)
                        <option
                            value="{{$id}}"
                            {{ old('categoria') == $id ? 'selected':""}}
                        ">{{$categoria}}</option>
                    @endforeach
                </select>

                @error('categoria')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Agregar Receta" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>

@endsection
