@extends('layouts.app');

@section('contenido')


<h1 class="pt-5 pb-5 text-center">Administradora de Inventario</h1>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col" class="align-middle" style="width: 7%">Id</th>
                    <th scope="col" class="align-middle" style="width: 60%">Artículo</th>
                    <th scope="col" class="align-middle" style="width: 23%">Cantidad</th>
                    <th scope="col" class="align-middle" style="width: 10%;text-align: center;"><a href="articulos/create" type="button" class="btn btn-primary"> Agregar </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articulos as $articulo)
                <tr>
                    <th scope="row" class="align-middle">{{$articulo->id}}</th>
                    <td class="align-middle">{{$articulo->nombre}}</td>
                    <td class="align-middle">{{$articulo->cantidad}}</td>
                    <td class="align-middle" style="text-align: center;">
                        <a href="{{url("articulos/{$articulo->id)}"}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach        
            </tbody>
        </table>
    </div>

@endsection