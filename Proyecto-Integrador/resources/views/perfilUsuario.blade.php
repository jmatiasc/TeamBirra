@extends('nav')

@section('content')
<div class="container">
  <div class="">
  <label for=""><strong>Nombre : </strong> {{$user->name}}</label>
  </div>

  <div class="">
  <label for=""><strong>email : </strong> {{$user->email}} </label>
  </div>

  <div class="">
  <label for=""><strong>password : </strong></label>
  </div>

  <div class="">
  <label for=""><strong>apellido : </strong> {{$user->apellido}} </label>
  </div>

  <div class="">
  <label for=""><strong>dni : </strong> {{$user->dni}} </label>
  </div>

  <div class="">
  <label for=""><strong>nickName : </strong> {{$user->nickName}} </label>
  </div>

  <div class="">
  <label for=""><strong>direccion : </strong> {{$user->direccion}} </label>
  </div>

  <div class="">
  <label for=""><strong>telefono : </strong> {{$user->telefono}} </label>
  </div>



@if ($user->es_admin)
  <a href="/agregarProducto">Agregar un Producto</a>
  <br>
  <a href="/modificarProductos">Modificar Catalogo(Editar/eliminar producto)</a>
@else
  <form class="" action="/agregarAdmin/{{$user->id}}" method="post">
    {{ csrf_field()}}
    <div class="form-group col-md-9 ">
        <label for="exampleFormControlTextarea1">Ingrese codigo para obtener permiso de administrador:</label>
        <input type="password" name="valor_admin" value="" id="valor_admin" class="form-control" id="inputEmail4">


    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
  </form>
@endif

</div>


@endsection
