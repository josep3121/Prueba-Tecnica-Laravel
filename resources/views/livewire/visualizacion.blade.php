<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
@extends('layouts.app')
@section('content')




<br>
<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
  
  <div class="card">
  <div class="card-body" style="background-color: #e3f2fd;">
  <div class="col-md-6"><h2><em> <strong>Listado de Productos </strong> </em></h2>
  
  
  </div>
  
<table class="table">
<br>
<thead>

<tr>
    <th scope="col">Id</th>    
    <th scope="col">Nombre Bodega</th>
    <th scope="col">Nombre Producto</th>
    <th scope="col">Precio</th>
    <th scope="col">Opciones</th>
</tr>

</thead>


</tbody>
@foreach($productos as $pro)
        <tr>
            <td>{{$pro -> id}}</td>
            <td>{{$pro ->nombreb}}</td>
            <td>{{$pro ->nombre}}</td>
            <td>{{$pro ->precio}}</td>
           
            <td>
            <a class="btn btn-primary btn-sm active" href="{{route('Actual', $pro->producto_id)}}"role="button" aria-pressed="true"  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Editar </a>
    &nbsp&nbsp&nbsp&nbsp
    <a class="btn btn-danger btn-sm text-light active" href="{{route('destroy', $pro->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg> Eliminar </a>
            </td>
        </tr>
@endforeach
</tbody>


</table>  
    
  </div>
</div>

  
  
  </div>
  <div class="col-md-1"></div>
</div>
@stop
</div>
