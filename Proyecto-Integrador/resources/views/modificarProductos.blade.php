@extends('nav')

@section('content')

<div class="container">
  <h1>MODIFICAR CATALOGO</h1>
<form role="form"  action='/modificarProductos' method='get' enctype="multipart/form-data">
  <div class="row">


      <div class="form-group col-md-3">

        <div class="form-group">
          <label for="exampleFormControlInput1">Busqueda</label>
          <input type="text" name="busqueda" id="precio" class="form-control input-sm" placeholder="precio" value="" >
        </div>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Marca</label>
        <select id="inputState"name="marca" class="form-control">
          @foreach ($marcas as $marca )
          <option value="<?php echo $marca["id"]?>" > <?php echo $marca["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Estilo</label>
        <select id="inputState" name="estilo" class="form-control">
          @foreach ($estilos as $estilo )
          <option value="<?php echo $estilo["id"]?>" > <?php echo $estilo["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Color</label>
        <select id="inputState" name="color" class="form-control">
          @foreach ($colores as $color )
          <option value="<?php echo $color["id"]?>" > <?php echo $color["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Origen</label>
        <select id="inputState" name="origen" class="form-control">
          @foreach ($origenes as $origen)
          <option value="<?php echo $origen["id"]?>" > <?php echo $origen["nombre"]?></option>
          @endforeach
        </select>
      </div>
      <div class="form-group col-md-1">
          <label for="inputState"></label>
          <button type="submit" class="btn btn-primary">buscar</button>
      </div>
    </div>
</form>
  @foreach ($productos as $producto )
    <label for="">Nombre:{{$producto["nombre"]}}</label>
    <label for="">marca:{{$producto->marca->nombre}}</label>
    <label for="">origen:{{$producto->origen->nombre}}</label>
    <label for="">estilo:{{$producto->origen->nombre}}</label>
    <label for="">color:{{$producto->color->nombre}}</label>
    <label for="">volumen:{{$producto["volumen"]}}</label>
    <label for="">precio:{{$producto["precio"]}}</label>
    <a href="/editarProducto/{{$producto->id}}">editar</a>
    <a href="/eliminarProducto/{{$producto->id}}">borrar</a>
    <br>
  @endforeach
</div>

@endsection
