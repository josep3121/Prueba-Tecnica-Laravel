@extends('layouts.app')
@section('content')


<br>
<br>
<br>

<div class="container">
<h2><em> <strong>Registro de Bodegas</strong> </em></h2>
<br>
<form action="{{url('bodegas/registro')}}" method="POST">
@csrf
        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
</span>
        <input type="number" class="form-control" placeholder="id" id="id" name="id" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

       

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
</svg></span>
        <input type="text" class="form-control" placeholder="Nombre" id="nameBo" name="nameBo" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>

<br>
<br>

        <button type="submit" class="btn btn-primary">Registrar</button>&nbsp&nbsp
        <a type="button" href="{{url('/bodegas/registro')}}" class="btn btn-danger">Cancelar</a>
</form>

</div><!--Fin div container-->
@stop