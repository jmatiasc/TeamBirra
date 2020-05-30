
@include('nav')
<body>

  @php
     $cantidad=1;
  @endphp

  <div class="producto-unitario container ">
    <div class="card shadow p-3 mb-5 bg-white rounded">



      @if (Auth::user())
        @if (Auth::user()->es_admin)
              <a style="color:#fece18; padding-left:10%;" href="/editarProducto/{{$producto->id}}"> Editar</a>
        @endif
      @endif
    <div class="imagen-producto col-12 col-sm-5 col-md-5 col-lg-5" >
      <?php
              $file=$producto["imagen"];
              if(is_file($file )){
                  $img=$producto["imagen"];}
              else {
                $img="images/NOT-IMG.jpg";
              }

              ?>
              @php
                if ($producto->color->nombre=="Rojo") {
                  $img="circulo-rojo.png";
                }else{
                  if ($producto->color->nombre=="Negro") {
                    $img="circulo-negro.png";
                  }else{
                      $img="circulo-amarillo.png";
                  }
                }
              @endphp
        <img style="background-image:url('../images/{{$img}}');" src="/storage/{{$producto->imagen}}" alt="<?php echo $img ?> ">
    </div>



    <div class="descripcion-producto col-12 col-sm-12 col-md-6 col-lg-6">
      <div class="nombre-Producto">
        <h2><?php echo $producto["nombre"]; ?></h2>
      </div>

      <div class="marca">
        <h5>{{$producto->marca->nombre}}</h5>
      </div>

      <div class="estrellas col-12 col-sm-12 col-md-12 col-lg-12">


        <div class="puntuacion-producto col-12 col-sm-6 col-md-6 col-lg-5">

            <?php for( $i = 0; $i<$producto->puntuacion; $i++ ) : ?>
              <label for="rating-input-1-5" class="rating-star1"></label>
            <?php endfor ?>
            <?php for( $j = $producto->puntuacion; $j<5; $j++ ) : ?>

              <label for="rating-input-1-5" class="rating-star2"></label>
            <?php endfor ?>
        </div>

        <span class=" col-12 col-sm-12 col-md-6 col-lg-6">
          <form role="form" action='/PuntuarProducto/<?php echo $producto["id"]?>' method='get' enctype="multipart/form-data">
            <div class=" puntuar ">
            <label class="col-12"> Puntúa el producto</label>
            <select id="inputState" name="puntos" class="form-control">
              @for ($i = 0; $i <= 5; $i++)
                <option value="<?php echo $i?>" > <?php echo $i?></option>
              @endfor
            </select>
            </div>
            <div class="puntuar btn-punt">
              <button type="submit" class="btn-sm btn-warning"><strong>+</strong></button>
            </div>

          </form>

        </span>

      </div>



      <div class="descripcion">
        <div class="texto-descriptivo">

          <h5 ><?php echo $producto["informacion"]; ?></h5>

        </div>

        <div class="detalles">
          <div class="colorName col-5 col-sm-5 col-md-5 col-lg-5">
            <h6>Color:</h6>
          </div>
          <div class="color col-7 col-sm-7 col-md-7 col-lg-7">
            <h6>{{$producto->color->nombre}}</h6>
          </div>

          <div class="EstiloName col-5 col-sm-5 col-md-5 col-lg-5">
            <h6>Estilo:</h6>

          </div>
          <div class="Estilo col-7 col-sm-7 col-md-7 col-lg-7">
            <h6>{{$producto->estilo->nombre}}</h6>
          </div>

          <div class="OrigenName col-5 col-sm-5 col-md-5 col-lg-5">
            <h6>Origen:</h6>
          </div>
          <div class="Origen col-7 col-sm-7 col-md-7 col-lg-7">
            <h6>{{$producto->origen->nombre}}</h6>
          </div>


        </div>

      </div>
  @if (Auth::user())
    <form class="" action="/carrito/{{Auth::user()->id}}/{{$producto->id}}" method="get">
    @else
      <form class="" action="/carrito" method="get">
  @endif
      <div class="cuentas col-12 col-sm-12 col-md-12 col-lg-12">

        <div class="cantidad col-4 col-sm-4 col-md-4 col-lg-4">
          <!--<samp class="sumar-restar"><a href="#">-</a></samp>
          <label for=""> 1 </label>
          <samp class="sumar-restar"><a href="#">+</a></samp>-->
          <div class=" puntuar ">
            <label for="">Cant:</label>
            <select id="inputState" name="cantidad" class="form-control">
            @for ($i = 1; $i <= $producto->stock; $i++)
              <option value="<?php echo $i?>" > <?php echo $i;   ?></option>
            @endfor
            </select>
          </div>
        </div>

        <div class="precio-producto col-8 col-sm-8 col-md-8 col-lg-8">
          $ <?php echo $producto["precio"]; ?>
        </div>

      </div>

      <div class="boton-comprar">
          <input type="submit" value="COMPRAR" class="contenedor_boton_filter">
      </div>
</form>
    </div>

</div>
  </div>
</body>
@include('footer')
