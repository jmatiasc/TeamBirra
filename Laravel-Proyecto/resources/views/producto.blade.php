
 @extends('footer')
@extends('layouts.app')

@section('content')

  <div class="container producto-Unitario">

    <div class="imagen-producto col-12 col-sm-5 col-md-5 col-lg-5">
      <?php
              $file=$producto["imagen"];
              if(is_file($file )){
                  $img=$producto["imagen"];}
              else {
                $img="images/NOT-IMG.jpg";
              }

              ?>
        <img src="/storage/{{$producto->imagen}}" alt="<?php echo $img ?> ">
    </div>



    <div class="descripcion-producto col-12 col-sm-6 col-md-6 col-lg-6">
      <div class="nombre-Producto">
        <h2><?php echo $producto["nombre"]; ?></h2>
      </div>

      <div class="marca">
        <h5>{{$producto->getMarca->nombre}}</h5>
      </div>

      <div class="estrellas">


        <span class="puntuacion">
          <!--COPIADO SISTEMA DE RATING DE UNA PAGINA-->
          <!--<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
          <label for="rating-input-1-5" class="rating-star1"></label>
          <!--	<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
          <label for="rating-input-1-5" class="rating-star1"></label>
          <!--<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
          <label for="rating-input-1-5" class="rating-star1"></label>
          <!--	<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
          <label for="rating-input-1-5" class="rating-star1"></label>
          <!--<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">-->
          <label for="rating-input-1-5" class="rating-star1"></label>

          <!--FIN DE COPIADO SISTEMA DE RATING DE UNA PAGINA-->
        </span>
      </div>

      <div class="descripcion">
        <div class="texto-descriptivo">

          <h5><?php echo $producto["descripcion"]; ?></h5>

        </div>

        <div class="detalles">
          <div class="colorName col-4 col-sm-4 col-md-4 col-lg-4">
            <h6>Color:</h6>
          </div>
          <div class="color col-8 col-sm-8 col-md-8 col-lg-8">
            <h6>{{$producto->getColor->nombre}}</h6>
          </div>

          <div class="EstiloName col-4 col-sm-4 col-md-4 col-lg-4">
            <h6>Estilo:</h6>

          </div>
          <div class="Estilo col-8 col-sm-8 col-md-8 col-lg-8">
            <h6>{{$producto->getEstilo->nombre}}</h6>
          </div>

          <div class="OrigenName col-4 col-sm-4 col-md-4 col-lg-4">
            <h6>Origen:</h6>
          </div>
          <div class="Origen col-8 col-sm-8 col-md-8 col-lg-8">
            <h6>{{$producto->getOrigen->nombre}}</h6>
          </div>


        </div>

      </div>

      <div class="cuentas col-12 col-sm-12 col-md-12 col-lg-12">

        <div class="cantidad col-4 col-sm-4 col-md-4 col-lg-4">
          <samp class="sumar-restar"><a href="#">-</a></samp>
          <label for=""> 1 </label>
          <samp class="sumar-restar"><a href="#">+</a></samp>
        </div>

        <div class="precio-producto col-8 col-sm-8 col-md-8 col-lg-8">
          $ <?php echo $producto["precio"]; ?>
        </div>

      </div>

      <div class="boton-comprar">
        @if (Auth::user())
            <a href="/carrito/{{Auth::user()->id}}/{{$producto["id"]}}">COMPRAR</a>
            @else
              <a href="/carrito">COMPRAR</a>
        @endif

      </div>

    </div>


  </div>
@endsection
