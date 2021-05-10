@extends('layouts.app')

@section('contenido')
<h1 class="pt-5 pb-5 text-center">Agregar Artículo</h1>
<form action="/articulos" method="POST">
@csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre"
            placeholder="Nombre del articulo">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea class="form-control" id="descripcion" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" class="form-control" id="cantidad" min="0" max="1000">
    </div>
    <a href="/articulos" class="btn btn-secondary"> Cancelar </a>
    <button type="submit" class="btn btn-primary"> Guardar</button>
</form>
@endsection