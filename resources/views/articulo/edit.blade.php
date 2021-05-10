@extends('layouts.app');

@section('contenido')

<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')

</form>

@endsection