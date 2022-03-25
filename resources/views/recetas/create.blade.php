@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


@section("botones")
    <a  href="{{route('recetas.index')}}" class="btn btn-primary text-white">Volver</a>
@endsection


@section('content')
<h5 class="text-center mb-5">crear recetas</h5>

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <form method="post" action="{{route('recetas.store')}}" enctype="multipart/form-data">
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


            <div class="form-group mb-3">
                <label for="ingredientes">Igredientes</label>
                <input type="hidden" name="ingredientes" id="ingredientes" value="{{old('ingredientes')}}">

                <trix-editor input="ingredientes"></trix-editor>
                @error('ingredientes')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="preparacion">Preparacion</label>
                <input type="hidden" name="preparacion" id="preparacion" value="{{old('preparacion')}}">

                <trix-editor
                    class="
                    @error('preparacion')
                        is-invalid
                    @enderror"
                    input="preparacion">
                </trix-editor>
                @error('preparacion')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>

                <input
                type="file"
                name="imagen"
                id="imagen" placeholder="Imagen"
                class="form-control @error('imagen') is-invalid @enderror"
                value="{{old("imagen")}}"
            >

                @error('imagen')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>

            <div class="form-group mt-2">
                <input type="submit" value="Agregar Receta" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>

@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
