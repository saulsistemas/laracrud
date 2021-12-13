@extends('layouts.plantilla')
@section('contenido')
<a href="articulos/create" class="btn btn-primary">Agregar</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>Codigo</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Opciones</th>
    </thead>
    <tbody>
        @foreach ($articulos as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->codigo}}</td>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->precio}}</td>
                <td>
                    <form action="{{route('articulos.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="/articulos/{{$item->id}}/edit" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection