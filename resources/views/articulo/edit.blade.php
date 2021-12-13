@extends('layouts.plantilla')
@section('contenido')
<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" name="codigo" class="form-control" value="{{$articulo->codigo}}">
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" value="{{$articulo->descripcion}}">
</div>
<div class="mb-3">
    <label for="cantidad" class="form-label">cantidad</label>
    <input type="number" name="cantidad" class="form-control" value="{{$articulo->cantidad}}" >
</div>
<div class="mb-3">
    <label for="precio" class="form-label">precio</label>
    <input type="number" name="precio" class="form-control" step="any" value="{{$articulo->precio}}">
</div>
<a href="/articulos" class="btn btn-secondary"> Cancelar</a>
<input type="submit" value="enviar" class="btn btn-primary">
</form>
@endsection