@extends('nav')

@section('content')

<div class="container contenedor-modificar">
  <h1>MODIFICAR CATALOGO</h1>
<form role="form"  action='modificarProductos' method='get' enctype="multipart/form-data">
  <div class="row">

      <div class="form-group col-md-2">
        <label for="inputState">Marca</label>
        <select id="inputState"name="marca" class="form-control">
          <option value="" >Todos </option>
          @foreach ($marcas as $marca )
          <option value="<?php echo $marca["id"]?>" > <?php echo $marca["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Estilo</label>
        <select id="inputState" name="estilo" class="form-control">
          <option value="" > Todos</option>
          @foreach ($estilos as $estilo )
          <option value="<?php echo $estilo["id"]?>" > <?php echo $estilo["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Color</label>
        <select id="inputState" name="color" class="form-control">
          <option value="" >Todos </option>
          @foreach ($colores as $color )
          <option value="<?php echo $color["id"]?>" > <?php echo $color["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-2">
        <label for="inputState">Origen</label>
        <select id="inputState" name="origen" class="form-control">
          <option value="" > Todos</option>
          @foreach ($origenes as $origen)
          <option value="<?php echo $origen["id"]?>" > <?php echo $origen["nombre"]?></option>
          @endforeach
        </select>
      </div>

      <div class="form-group col-md-3">

        <div class="form-group">
          <label for="exampleFormControlInput1">Busqueda</label>
          <input type="text" name="busqueda" id="precio" class="form-control input-sm" placeholder="Ingrese su busqueda" value="" >
        </div>
      </div>

      <div class="btn-mod form-group col-md-1 ">
          <label for="inputState"></label>
          <button type="submit" class="btn btn-warning"><img style="" width="15px" src="images/lupa.svg" alt="Search"></img></button>
      </div>
    </div>
</form>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Marca</th>
        <th scope="col">Origen</th>
        <th scope="col">Estilo</th>
        <th scope="col">Color</th>
        <th scope="col">Volumen</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto )
      <tr>
        <th scope="row"><img src="/storage/{{$producto->imagen}}" width="20px" alt=" "></th>
        <td>{{$producto["nombre"]}}</td>
        <td>{{$producto->marca->nombre}}</td>
        <td>{{$producto->origen->nombre}}</td>
        <td>{{$producto->estilo->nombre}}</td>
        <td>{{$producto->color->nombre}}</td>
        <td>{{$producto["volumen"]}}</td>
        <td>${{$producto["precio"]}}</td>
        <td><a class="text-warning" href="/editarProducto/{{$producto->id}}">editar</a></td>
        <td><a class="text-warning" href="/eliminarProducto/{{$producto->id}}">borrar</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>

  {{$productos->links()}}


</div>

@endsection
