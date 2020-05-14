@php
  $nombre="";
  $precio="";
  $informacion="";
  $graduacionAlcoholica="";
  $volumen="";

/*  if($_POST){
    $nombre=$_POST["name"];
    $precio=$_POST["precio"];
    $informacion=$_POST["informacion"];
    $graduacionAlcoholica=$_POST["graduacionAlcoholica"];
    $volumen=$_POST["volumen"];
  }*/



@endphp
@extends('nav')

@section('content')


<div class="container">

  <div class="titulo-perfil col-12 col-sm-12 col-md-12 col-lg-9">
    <h3>Agregar producto</h3>

  </div>
<div class=" card-perfil shadow p-3 mb-5 bg-white rounded col-12 col-md-9 col-lg-9">


    <form role="form" action='/agregarProducto' method='post' enctype="multipart/form-data">
      {{ csrf_field()}}

    <div class="form-group">
    <label for="exampleFormControlFile1">Imagen</label>
    <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputEmail4">Nombre</label>
        <input type="text"name="nombre" id="nombre" value="{{$nombre}}" class="form-control" id="inputEmail4">
        {{$errors->first("nombre")}}
      </div>

      <div class="form-group col-md-3">
        <div class="">
        <label for="inputEmail4">Precio</label>
        </div>
      <div class="medidas">$</div>
      <input type="text"name="precio" id="precio" value="{{$precio}}" class="form-control ing-rigth" id="inputEmail4">
        {{$errors->first("precio")}}
      </div>

      <div class="form-group col-md-3">
        <div class="">
        <label for="inputEmail4">Volumen</label>
        </div>
        <input type="text"name="volumen" id="volumen" value="{{$volumen}}" class="form-control ing-left" id="inputEmail4"><div class="medidas">ml</div>
        {{$errors->first("volumen")}}
      </div>

      <div class="form-group col-md-3">
        <div class="">
        <label for="inputEmail4">graduacion alcoholica</label>
        </div>
        <input type="text"name="graduacionAlcoholica" value="{{$graduacionAlcoholica}}" id="graduacionAlcoholica" class="form-control ing-left" id="inputEmail4"><div class="medidas">%</div>
        {{$errors->first("graduacionAlcoholica")}}
      </div>

    </div>
    <div class="form-row">

      <div class="form-group col-md-3">
        <label for="inputState">Marca</label>
        <select id="inputState"name="marca" class="form-control">
          @foreach ($marcas as $marca )
          <option value="<?php echo $marca["id"]?>" > <?php echo $marca["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Estilo</label>
        <select id="inputState" name="estilo" class="form-control">
          @foreach ($estilos as $estilo )
          <option value="<?php echo $estilo["id"]?>" > <?php echo $estilo["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Color</label>
        <select id="inputState" name="color" class="form-control">
          @foreach ($colores as $color )
          <option value="<?php echo $color["id"]?>" > <?php echo $color["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Origen</label>
        <select id="inputState" name="origen" class="form-control">
          @foreach ($origenes as $origen)
          <option value="<?php echo $origen["id"]?>" > <?php echo $origen["nombre"]?></option>
          @endforeach
        </select>
      </div>

    </div>
    <div class="form-row">
    <div class="form-group col-md-9 ">
        <label for="exampleFormControlTextarea1">Informacion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" value="{{$informacion}}" name="informacion" rows="3"></textarea>
        {{$errors->first("informacion")}}
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Stock</label>
        <select id="inputState" name="stock" class="form-control">
          @for ($i = 0; $i < 100; $i++)
            <option value="<?php echo $i?>" > <?php echo $i?></option>
          @endfor
        </select>
      </div>

    </div>
    <button type="submit" class="btn btn-warning">Agregar</button>
  </form>
</div>

<div class="">
      <a class="back" href="/perfilUsuario/{{Auth::user()->id}}"> << Volver al perfil </a>
</div>
</div>
@endsection
