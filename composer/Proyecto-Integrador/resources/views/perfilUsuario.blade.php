@extends('footer')
@extends('nav')

@section('content')
<div class="container contenedor-perfil ">



  <div  class=" navbar-expand-lg navbar-light  nav-config-perfil col-12 col-md-3 col-lg-3" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse lista-perfil" id="navbarNavDropdown">
    <ul class="categoria " >
              <li class="bg-warning nav-item list-group-item ">
                <div class="">
                Config
                </div>
              </li>
        @if ($user->es_admin)
              <div class="">
              <li class=" boton-categorias nav-item list-group-item list-group-item-action">
                <a class="nav-link " href="/agregarProducto">Agregar un Producto <span class="sr-only">(current)</span></a>
              </li>
              </div>
              <div class="">
              <li class=" boton-categorias nav-item list-group-item list-group-item-action">
                <a class="nav-link" href="/modificarProductos">Modificar Catalogo</a>
              </li>
              </div>
      @endif
              <div class="">
              <li class="boton-categorias nav-item list-group-item list-group-item-action">
                <a class="nav-link" href="/compra/{{$user->id}}">Mis compras</a>
              </li>
              </div>
              @if (!$user->es_admin)
                      <li class="boton-categorias nav-item dropdown nav-item list-group-item list-group-item-action">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          Queres ser Admin? <span class="caret"></span>
                        </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">



                              <form class="" action="/agregarAdmin/{{$user->id}}" method="post">
                                {{ csrf_field()}}
                                <div class="form-group " style="padding:5%">
                                    <label for="" style="text-align:center">Ingrese codigo para obtener permiso de administrador:</label>
                                    <div class="" >
                                      <input type="password" name="valor_admin"   id="valor_admin" class="form-control" id="inputEmail4">
                                    </div>
                                    <br>
                                    <button type="submit"    class="btn btn-warning col-12 col-sm-12 col-md-12 col-lg-12">Agregar</button>
                              </form>

                            </div>

                          </div>
                        </li>
              @endif
    </ul>

  </div>
</div>

<div class="titulo-perfil col-12 col-sm-12 col-md-12 col-lg-9">
  <h3>Perfil Usuario</h3>
  <div class="" >
    <img src="/images/line.png" alt="">
  </div>
</div>



<div class=" card-perfil shadow p-3 mb-5 bg-white rounded col-12 col-md-9 col-lg-9">
<div class="img-perfil col-12 col-md-4 col-lg-4">

  <div class="marco-img-perfil shadow p-3 mb-5 bg-white rounded">
    <img src="/images/perfilIcon.png" alt="">
  </div>
  <div class="boton-perfil col-12 col-sm-12 col-md-12 col-lg-12">
    <a href="/mostrarEditarDatos/{{$user->id}}">
      <div class="btn-edit-perfil ">
        EDITAR PERFIL
      </div>
    </a>
  </div>

</div>

<div class="nav-datos-perfil  col-12 col-md-8 col-lg-8" >


  <table class="table table-bordered table-striped shadow-none p-3 mb-5 bg-light rounded">
  <thead>

  </thead>
  <tbody>
    <tr>
      <th scope="row" class="bg-warning">Nickname:</th>
      <td>{{$user->nickName}}</td>
    </tr>

    <tr>
      <th scope="row" class="bg-warning">Nombre:</th>
      <td>{{$user->name." ".$user->apellido}}</td>
    </tr>

    <tr>
      <th scope="row" class="bg-warning">Email:</th>
      <td>{{$user->email}}</td>
    </tr>

    <tr>
      <th scope="row" class="bg-warning">DNI:</th>
      <td>{{$user->dni}}</td>
    </tr>

    <tr>
      <th scope="row" class="bg-warning">Direccion:</th>
      <td>{{$user->direccion}}</td>
    </tr>

    <tr>
      <th scope="row" class="bg-warning">Telefono:</th>
      <td>{{$user->telefono}}</td>
    </tr>

</table>
</div>


</div>
</div>


@endsection
