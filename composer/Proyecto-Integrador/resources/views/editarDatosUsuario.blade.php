@php
  $nombre="";
  $precio="";
  $informacion="";
  $graduacionAlcoholica="";
  $volumen="";

  if($_POST){
    $nombre=$_POST["name"];
    $precio=$_POST["precio"];
    $informacion=$_POST["informacion"];
    $graduacionAlcoholica=$_POST["graduacionAlcoholica"];
    $volumen=$_POST["volumen"];
  }



@endphp
@extends('nav')

@section('content')


<div class="container">
<h1>EDITAR</h1>
  <form role="form" action='/editarDatos/{{$user->id}}' method='post' enctype="multipart/form-data">
      {{ csrf_field()}}

    <div class="form-row">

      <div class="form-group col-md-3">
        <label for="inputEmail4">Nickname</label>
        <input type="text"name="nickName" value="{{$user->nickName}}" id="nickName" class="form-control" id="inputEmail4">
        {{$errors->first("nickName")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">Nombre</label>
        <input type="text"name="name" id="name" value="{{$user->name}}" class="form-control" id="inputEmail4">
        {{$errors->first("name")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">Apellido</label>
        <input type="text"name="apellido" id="apellido" value="{{$user->apellido}}" class="form-control" id="inputEmail4">
        {{$errors->first("apellido")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">Email</label>
        <input type="text"name="email" id="email" value="{{$user->email}}" class="form-control" id="inputEmail4">
        {{$errors->first("email")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">Telefono</label>
        <input type="text"name="telefono" value="{{$user->telefono}}" id="telefono" class="form-control" id="inputEmail4">
        {{$errors->first("telefono")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">Direccion</label>
        <input type="text"name=" direccion" value="{{$user->direccion}}" id="direccion" class="form-control" id="inputEmail4">
        {{$errors->first("direccion")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">DNI</label>
        <input type="text"name=" dni" value="{{$user->dni}}" id="dni" class="form-control" id="inputEmail4">
        {{$errors->first("dni")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputEmail4">Password</label>
        <input type="text"name="" value="NO FUNCIONA " id="" class="form-control" id="inputEmail4">
      </div>

    </div>

    <button type="submit" class="btn btn-primary">Confirmar</button>
  </form>

</div>
@endsection
