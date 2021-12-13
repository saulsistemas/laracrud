@extends('layouts.plantilla')
@section('contenido')
<form action="/articulos" method="POST">
@csrf
@method('POST')
<div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" name="codigo" class="form-control" >
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" >
</div>
<div class="mb-3">
    <label for="cantidad" class="form-label">cantidad</label>
    <input type="number" name="cantidad" class="form-control" >
</div>
<div class="mb-3">
    <label for="precio" class="form-label">precio</label>
    <input type="number" name="precio" class="form-control" step="any" value="0.00">
</div>
<a href="/articulos" class="btn btn-secondary"> Cancelar</a>
<input type="submit" value="enviar" class="btn btn-primary">
</form>
@endsection