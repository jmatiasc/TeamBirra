@extends('footer')
@extends('layouts.app')

@section('content')

<div class="container contenedor-form-up">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<main role="main" class="inner cover text-center">
  <form role="form" action='/productoUpdate' method='post' enctype="multipart/form-data">
    {{ csrf_field()}}
    <div class="col-md-8 offset-md-2 col-sm-8 offset-sm-2">

    <div class="row">
          <!-- nombre del producto-->
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre" value="" required>
        </div>
      </div>
          <!-- marca del producto-->
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Marca</label>
          <input type="text" name="marca" id="marca" class="form-control input-sm" placeholder="Marca" value="" required>
        </div>
      </div>
    </div>

    <div class="row">
              <!-- precio del producto-->
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Precio</label>
          <input type="text" name="precio" id="precio" class="form-control input-sm" placeholder="precio" value="" required>
        </div>
      </div>
            <!-- color del producto-->
      <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Color</label>
          <input type="text" name="color" id="color" class="form-control input-sm" placeholder="color" value="" required>
        </div>
      </div>
    </div>


        <div class="row">
              <!-- estilo del producto-->
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Estilo</label>
              <input type="text" name="estilo" id="estilo" class="form-control input-sm" placeholder="estilo" value="" required>
            </div>
          </div>
              <!-- Origen del producto-->
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Origen</label>
              <input type="text" name="origen" id="origen" class="form-control input-sm" placeholder="origen" value="" required>
            </div>
          </div>
        </div>



    <!-- poner en oferta el producto-->
    <div class=" en-oferta col-xs-12 col-sm-12 col-md-12">
        <label for="exampleFormControlInput1">Poner en oferta</label>
        <div class="form-check">
            <input  type="radio" name="enOferta" id="gridRadios" value="TRUE" checked>
          <label class="form-check-label" for="gridRadios1">
            si
          </label>
        </div>
        <div class="form-check">
          <input  type="radio" name="enOferta" id="gridRadios" value="FALSE">
          <label class="form-check-label" for="gridRadios2">
            no
          </label>
        </div>
      </div>

      <div class=" col-12 col-md-6 col-lg-6">
        <label for="">Subir </label>
        <input type="file" name="imagen" >
      </div>



    <div class=" col-12 col-md-12 col-lg-12">
      <label for="exampleFormControlTextarea1">Descripción del producto </label>
      <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3" value="descripcion"></textarea>
    </div>

    <div class="col-12 col-md-12 col-lg-12">
      <input type="submit" name="Agregar producto" value="Agregar product">
    </div>
</div>

  </form>
    </main>
    </div>
</div>
@endsection
