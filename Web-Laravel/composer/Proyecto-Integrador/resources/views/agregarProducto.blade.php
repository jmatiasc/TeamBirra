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
@include('nav')
<body>



<div class="container">

  <div class="titulo-perfil col-12 col-sm-12 col-md-12 col-lg-9">
    <h3>Agregar producto</h3>
    <div class="">
          <a class="back" href="/perfilUsuario/{{Auth::user()->id}}"> << Volver al perfil </a>
    </div>
  </div>
<div class=" card-perfil shadow p-3 mb-5 bg-white rounded col-12 col-md-9 col-lg-9">
    <div class="errores" style="color:red">
      <p>{{$errors->first("nombre")}}</p>
      <p>{{$errors->first("precio")}}</p>
      <p>{{$errors->first("volumen")}}</p>
      <p>{{$errors->first("graduacionAlcoholica")}}</p>
      <p>{{$errors->first("informacion")}}</p>
    </div>


    <form role="form" class="form-add-product"action='/agregarProducto' method='post' enctype="multipart/form-data">
      {{ csrf_field()}}

    <div class="form-group">
    <label for="exampleFormControlFile1">Imagen</label>
    <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <div class="form-row">
      <div class="form-group col-md-12">
        <div class="">
          <label for="inputEmail4">Nombre</label>
        </div>
        <input type="text"name="nombre" id="nombre" value="{{$nombre}}" class="form-control" id="inputEmail4">
        <label style="color:red" id="errorNombre"></label>
      </div>

      <div class="">
      <label for="inputEmail4">Precio</label>
      </div>
      <div class="form-group input-group mb-3 col-md-12">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">$</span>
        </div>
        <input  class="form-control" type="text"name="precio" value="{{$precio}}" aria-label="" aria-describedby="basic-addon1">
        <label style="color:red" id="errorPrecio"></label>
      </div>


      <label for="inputEmail4">Volumen</label>
      <div class="form-group input-group mb-3 col-md-12">
        <input  class="form-control" type="text"name="volumen"  value="{{$volumen}}" aria-label="" aria-describedby="basic-addon1">

        <div class="input-group-append">
        <span class="input-group-text" id="basic-addon1">ml</span>
        </div>
        <label style="color:red" id="errorVolumen"></label>
      </div>


      <label for="inputEmail4">Graduacion alcoholica</label>
      <div class="form-group input-group mb-3 col-md-12">
        <input  class="form-control" type="text"name="graduacionAlcoholica"  value="{{$graduacionAlcoholica}}" aria-label="" aria-describedby="basic-addon1">

        <div class="input-group-append">
        <span class="input-group-text" id="basic-addon1">%</span>
        </div>
        <label style="color:red" id="errorGraduacionAlcoholica"></label>
      </div>


    </div>
    <div class="form-row">

      <div class="form-group col-md-3">
        <label for="inputState">Marca</label>
        <select id="inputState "name="marca" class="section-marca form-control">
          @foreach ($marcas as $marca )
          <option value="<?php echo $marca["id"]?>" > <?php echo $marca["nombre"]?></option>
          @endforeach
        </select>
        <div class="puntuar btn-punt">
          <a href="#" id="add-marca"><div  class="btn-sm btn-warning"><strong>Agregar Marca</strong></div></a>
        </div>
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Estilo</label>
        <select id="inputState" name="estilo" class="section-Estilo form-control">
          @foreach ($estilos as $estilo )
          <option value="<?php echo $estilo["id"]?>" > <?php echo $estilo["nombre"]?></option>
          @endforeach
        </select>
        <div class="puntuar btn-punt">
          <a href="#" id="add-estilo"><div  class="btn-sm btn-warning"><strong>Agregar estilo</strong></div></a>
        </div>
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Color</label>
        <select id="inputState" name="color" class=" section-Color form-control">
          @foreach ($colores as $color )
          <option value="<?php echo $color["id"]?>" > <?php echo $color["nombre"]?></option>
          @endforeach
        </select>
        <div class="puntuar btn-punt">
          <a href="#" id="add-color"><div  class="btn-sm btn-warning"><strong>Agregar color</strong></div></a>
        </div>
      </div>

      <div class="form-group col-md-3">
        <label for="inputState">Origen</label>
        <select id="inputState" name="origen" class="section-Origen form-control">
          @foreach ($origenes as $origen)
          <option value="<?php echo $origen["id"]?>" > <?php echo $origen["nombre"]?></option>
          @endforeach
        </select>
        <div class="puntuar btn-punt">
          <a href="#" id="add-Origen"><div  class="btn-sm btn-warning"><strong>Agregar origen</strong></div></a>
        </div>

      </div>

    </div>
    <div class="form-row">
    <div class="form-group col-md-9 ">
        <label for="exampleFormControlTextarea1">Informacion</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" value="{{$informacion}}" name="informacion" rows="3"></textarea>
        <label style="color:red" id="errorInformacion"></label>
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


</div>
</body>
@include('footer')
