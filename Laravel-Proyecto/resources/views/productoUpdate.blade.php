




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
          <select name="marca">
            @foreach ($marcas as $marca )
            <option value="<?php echo $marca["id"]?>" > <?php echo $marca["nombre"]?></option>
            @endforeach
            <option value="otro" >
               Otros...
            </option>
            </select>

                  <input type="text" name="marcaOtro" id="marcaOtro" class="form-control input-sm" placeholder="marcaOtro" value="" >

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
                <select name="color">
                  @foreach ($colores as $color )
                  <option value="<?php echo $color["id"]?>" > <?php echo $color["nombre"]?></option>
                  @endforeach
                  <option value="otro" >
                     Otros...
                  </option>
                  </select>

                        <input type="text" name="colorOtro" id="colorOtro" class="form-control input-sm" placeholder="colorOtro" value="" >
                </div>
            </div>

        </div>

        <div class="row">
              <!-- estilo del producto-->
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Estilo</label>
                  <select name="estilo">
                    @foreach ($estilos as $estilo )
                    <option value="<?php echo $estilo["id"]?>" > <?php echo $estilo["nombre"]?></option>
                    @endforeach
                    <option value="otro" >
                       Otros...
                    </option>
                    </select>

                          <input type="text" name="estiloOtro" id="estiloOtro" class="form-control input-sm" placeholder="estiloOtro" value="" >
                  </div>

            </div>
              <!-- Origen del producto-->
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Origen</label>
                  <select name="origen">
                    @foreach ($origenes as $origen)
                    <option value="<?php echo $origen["id"]?>" > <?php echo $origen["nombre"]?></option>
                    @endforeach
                    <option value="otro" >
                       Otros...
                    </option>
                    </select>
                          <input type="text" name="origenOtro" id="colorOtro" class="form-control input-sm" placeholder="origenOtro" value="" >
                  </div>
              </div>
        </div>

      <div class="row">
    <!-- poner en oferta el producto-->
    <div class=" en-oferta col-xs-6 col-sm-6 col-md-6">

      </div>

      <div class=" col-xs-6 col-sm-6 col-md-6">
          <label for="exampleFormControlInput1">cantidad En stock</label>
          <select name="cantidad">

            @for ($i = 0; $i < 100; $i++)
              <option value="<?php echo $i?>" > <?php echo $i?></option>
            @endfor
            </select>
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
